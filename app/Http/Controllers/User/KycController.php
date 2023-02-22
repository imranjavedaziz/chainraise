<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\KYC_Status_Email;
use App\Mail\UploadDocument;
use App\Models\Custodial;
use App\Models\KYC;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

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
            $dob = Carbon::parse($user->userDetail->dob)->format('Y-m-d');
            $identity_containers = Http::withToken($token_json['access_token'])->withHeaders([
                'Content-Type' => 'application/json',
            ])->post('https://api.sandbox.fortressapi.com/api/trust/v1/identity-containers', [
                'firstName' => $user->name,
                'middleName' => $user->userDetail->middle_name,
                'lastName' => $user->userDetail->last_name,
                'phone' =>  $user->phone,
                'email' => $user->email,
                'ssn' => $user->identityVerification->primary_contact_social_security,
                'dateOfBirth' => "1990-09-02",
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
                $document_path_back = fopen('https://st2.depositphotos.com/1063296/8337/i/950/depositphotos_83370180-stock-photo-luxury-dark-red-car-back.jpg', 'r');
                $url = "https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/".$user->fortress_personal_identity."/documents";
                $upload_document = Http::attach('DocumentType', 'passport')->
                                         attach('DocumentFront', $document_path)->
                                         attach('DocumentBack', $document_path_back)
                ->withToken($token_json['access_token'])
                ->post($url);
                $json_upload_document =  json_decode((string) $upload_document->getBody(), true);
                if($upload_document->failed()) {
                    return response([
                        'status' => $upload_document->status(),
                        'data'   => $json_upload_document,
                    ]);
                }
                // Checking Level Of New User
                $upgrade_existing_l0 = Http::withToken($token_json['access_token'])->
                withHeaders(['Content-Type' => 'application/json'])->
                get('https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/'.$user->fortress_personal_identity);
                $json_upgrade_existing_l0 = json_decode((string) $upgrade_existing_l0->getBody(), true);
                if($upgrade_existing_l0->failed()) {
                    return response([
                        'status' => $upgrade_existing_l0->status(),
                        'data'   => $json_upgrade_existing_l0,
                    ]);
                }else{
                    KYC::updateOrCreate(
                        ['user_id' => $user->id],
                        ['kyc_level' => $json_upgrade_existing_l0['kycLevel'],'doc_status'=>$json_upgrade_existing_l0['documents'][0]['documentCheckStatus']]
                    ); 
                }
                $identityId = $json_identity_containers['personalIdentity'];
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
            
        } catch (Exception $error) {
            dd($error);
            return response([
                'status' => false,
            ]);
        }
    
        
    }

  
    public function re_run_kyc(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]); 
        $user = User::find($request->id);
        if($user->fortress_personal_identity == null){
            return response([
                'status' => false,
                'message' =>'Please run KYC Check First then try again',
            ]);
        }
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
            if($get_token->failed()) {
                return response([
                    'status' => $get_token->status(),
                    'data'   => $token_json,
                ]);
            }
            $upgrade_existing_l0 = Http::withToken($token_json['access_token'])->
            withHeaders(['Content-Type' => 'application/json'])->
            get('https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/'.$user->fortress_personal_identity);
            $json_upgrade_existing_l0 = json_decode((string) $upgrade_existing_l0->getBody(), true);
            if ($upgrade_existing_l0->failed()) {
                return response([
                    'status' => $upgrade_existing_l0->status(),
                    'data' => $json_upgrade_existing_l0,
                ]);
            }else{
            
            KYC::updateOrCreate(
                ['user_id' => $user->id],
                ['kyc_level' => $json_upgrade_existing_l0['kycLevel'],'doc_status'=>$json_upgrade_existing_l0['documents'][0]['documentCheckStatus']]
            );
            return response([
                'status' => $upgrade_existing_l0->status(),
                'data'   => $json_upgrade_existing_l0,
            ]);
            }
        }catch(Exception $error){
            dd($error);
            return response([
                'status' => false,
                'error'=>$error,
            ]);
        }


    }
    public function re_run_kyc_2(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        $user = User::find($request->id);
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
            dd($token_json);
            if($get_token->failed()) {
                return response([
                    'status' => $get_token->status(),
                    'data'   => $token_json,
                ]);
            }
            $update_existing_personal= Http::withToken($token_json['access_token'])->withHeaders([
                'Content-Type' => 'application/json',
            ])->patch('https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/'.$user->fortress_personal_identity, [
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
                'upgradeKYC'=>true,
            ]);
            dd($update_existing_personal);



        }catch(Exception $error){
            return response([
                'status' => false,
            ]);
        }
    }

    public function kycDocumentUpoad(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        $user = User::find($request->id);
        if($user->fortress_personal_identity == null){
            return response([
                'status' => false,
                'message' =>'Please run KYC Check First then try again',
            ]);
        }
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
            if($get_token->failed()) {
                return response([
                    'status' => $get_token->status(),
                    'data'   => $token_json,
                ]);
            }
            $document_path = fopen('https://i.brecorder.com/primary/2022/05/626e8e55ac3c3.jpg', 'r');
            $url = "https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/".$user->fortress_personal_identity."/documents";
            $upload_document = Http::
            attach('DocumentType', 'license')->attach('DocumentFront', $document_path)->attach('DocumentBack', $document_path)
            ->withToken($token_json['access_token'])
            ->post($url);
            $json_upload_document =  json_decode((string) $upload_document->getBody(), true);
            //Mail::to($user)->send(new UploadDocument($user));
            return response([
                'status' => $upload_document->status(),
                'data'   => $json_upload_document,
            ]);
        }catch(Exception $error){
            
            return response([
                'status' => false,
                'error'=>$error,
            ]);
        }
    }

    
}
