<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KycController extends Controller
{
    public function checkKyc(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        try {
            $get_token = Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post('https://fortress-sandbox.us.auth0.com/oauth/token', [
                'grant_type' => 'password',
                'username'   => 'tayyabshahzad@sublimesolutions.org',
                'password'   => 'x0A1PGhevtkJu4qeXBXF',
                'audience'   => 'https://fortressapi.com/api',
                'client_id'  => 'pY6XoVugk1wCYYsiiPuJ5weqMoNUjXbn',
            ]);
            $token_json =  json_decode((string) $get_token->getBody(), true);
           // dd($token_json);
            if ($get_token->failed()) {
                return response([
                    'status' => $get_token->status(),
                ]);
            }
            $user = User::with('userDetail')->find($request->id);
            if (!$user->getFirstMediaUrl('kyc_document_collection')) {
                return response([
                    'status' => 'document',
                ]);
            }
            
            if ($user->fortress_id) {
                $fortress_id = $user->fortress_id;
                $personal_identity = $user->fortress_personal_identity;
                if ($get_token->successful()) {
                    $check_identity_container = Http::withToken($token_json['access_token'])->withHeaders([
                        'Content-Type' => 'application/json',
                    ])->get('https://api.sandbox.fortressapi.com/api/trust/v1/identity-containers/' . $fortress_id);
                    $json_check_identity_container =  json_decode((string) $check_identity_container->getBody(), true);
                    if ($check_identity_container->successful()) {
                        $document_path = fopen($user->getFirstMediaUrl('kyc_document_collection'), 'r');
                        $url = "https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/" . $personal_identity . "/documents";
                        $upload_document = Http::attach('DocumentType', 'license')->attach('DocumentFront', $document_path)
                        ->withToken($token_json['access_token'])
                        ->post($url);
                        $json_upload_document =  json_decode((string) $upload_document->getBody(), true);
                        if ($upload_document->successful()) {
                            return response([
                                'status' => $check_identity_container->status(),
                                'data'   => $json_check_identity_container,
                            ]);
                        } else {
                            return response([
                                'status' => $upload_document->status(),
                                'data'   => $json_upload_document,
                            ]);
                        }
                    } else {
                        return response([
                            'status' => $check_identity_container->status(),
                            'data'   => $json_check_identity_container,
                        ]);
                    }
                }
            } else {
                $dob = Carbon::parse($user->userDetail->dob)->format('Y-m-d');
                $identity_containers = Http::withToken($token_json['access_token'])->withHeaders([
                    'Content-Type' => 'application/json',
                ])->post('https://api.sandbox.fortressapi.com/api/trust/v1/identity-containers', [
                    'firstName' => $user->name,
                    'middleName' => $user->userDetail->middle_name,
                    'lastName' => $user->userDetail->last_name,
                    'phone' =>  $user->phone,
                    'email' => $user->email,
                    'dateOfBirth' => "1990-09-02",
                    'ssn' => $user->identityVerification->primary_contact_social_security,
                    'address.street1' => $user->userDetail->address,
                    'address.street2' => '-',
                    'address.postalCode' => $user->userDetail->zip,
                    'address.city' => $user->userDetail->city,
                    'address.state' => $user->userDetail->state,
                    'address.country' => $user->identityVerification->nationality,
                ]);
                $json_identity_containers =  json_decode((string) $identity_containers->getBody(), true);
                if ($identity_containers->successful()) {
                    $user->fortress_id =  $json_identity_containers['id'];
                    $user->fortress_personal_identity =  $json_identity_containers['personalIdentity'];
                    $user->save();
                    $document_path = fopen('https://i.brecorder.com/primary/2022/05/626e8e55ac3c3.jpg', 'r');
                    $url = "https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/".$user->fortress_personal_identity."/documents";
                    $upload_document = Http::attach('DocumentType', 'license')->attach('DocumentFront', $document_path)
                    ->withToken($token_json['access_token'])
                    ->post($url);
                    $json_upload_document =  json_decode((string) $upload_document->getBody(), true);
                    return response([
                        'status' => $identity_containers->status(),
                        'data'   => $json_identity_containers,
                    ]);
                } else {
                    return response([
                        'status' => $identity_containers->status(),
                        'data'   => $json_identity_containers,
                    ]);
                }
            }
        } catch (Exception $error) {
            return response([
                'status' => false,
            ]);
        }
        dd(1);

        if ($response->successful()) {
            $dob = Carbon::parse($user->userDetail->dob)->format('Y-m-d');
            $identity_containers = Http::withToken($response_json['access_token'])->withHeaders([
                'Content-Type' => 'application/json',
            ])->post('https://api.sandbox.fortressapi.com/api/trust/v1/identity-containers', [
                'firstName' => $user->first_name,
                'middleName' => $user->middle_name,
                'lastName' => $user->last_name,
                'phone' =>  $user->phone,
                'email' => $user->email,
                'dateOfBirth' => $dob,
                'ssn' => $user->identityVerification->primary_contact_social_security,
                'address.street1' => $user->userDetail->address,
                'address.street2' => '-',
                'address.postalCode' => $user->userDetail->zip,
                'address.city' => $user->userDetail->city,
                'address.state' => $user->userDetail->state,
                'address.country' => $user->identityVerification->nationality,
            ]);
            $json_identity_containers =  json_decode((string) $identity_containers->getBody(), true);
            if ($identity_containers->successful()) {


                dd('success');
            } else {
                return response([
                    'status' => $identity_containers->status(),
                    'data'   => $json_identity_containers,
                ]);
            }
        } else {
            return response([
                'status' => false,
                'message' => ucfirst($response_json['error']),
            ]);
        }
    }

    public function reKyc(Request $request)
    {
        dd(1);
    }
}
