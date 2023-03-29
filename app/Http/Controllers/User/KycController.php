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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class KycController extends Controller
{

    public function updateKycCheck($id){ 
        $user = User::find($id);  
        if($user->check_kyc == true){
            $kyc = false;
        }elseif($user->check_kyc == false){
            $kyc = true;
        } 
        $user->check_kyc = $kyc;
        $user->save();
        if($user->check_kyc == true){
            $data = 'Enabled';
        }else{
            $data = 'Disabled';
        }
        return response([
            'data'=>$data,
            'status'=>true
        ]);
    }
    public function checkKyc(Request $request)
    {
        $access_url = "https://api.sandbox.fortressapi.com/api/trust/v1/";
        $request->validate([
            'id' => 'required',
        ]);
       
        $errors = []; 
        $user = User::with('userDetail')->find($request->id); 
        
       
        if (!$user->getFirstMediaUrl('kyc_document_collection')) {
            $errors[] = 'Please Upload Document First';
            return response([
                'status' => 'document',
                'success' => false,
                'errors' => $errors,
            ]);
        } 
        // Token Request
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
                $errors[] = 'Error While Creating Token';
                return response([
                    'status' => $get_token->status(),
                    'errors' => $errors[] = 'Error',
                ]);
            }
        }catch(Exception $token_error){
                $errors[] = 'Error While Creating Token';
                $errors[] = $token_error;
                return response([
                    'success'  => false,
                    'errors' => $errors,
                ]);
        } 
       
        
       

        
         // Identity Containers Request
         try{ 
            $identity_containers = Http::withToken($token_json['access_token'])->withHeaders([
                'Content-Type' => 'application/json',
            ])->post($access_url.'identity-containers', [
                'firstName' => $user->name,
                'middleName' => $user->userDetail->middle_name,
                'lastName' => $user->userDetail->last_name,
                'phone' =>  '+'.$user->cc.$user->phone,
                'email' => $user->email,
                'address' => [
                    'street1' => $user->userDetail->address, 
                    'postalCode' => $user->userDetail->zip,
                    'city' => $user->userDetail->city,
                    'state' => $user->userDetail->state,
                    'country' => $user->identityVerification->nationality,
                ]
        
            ]);
            $json_identity_containers =  json_decode((string) $identity_containers->getBody(), true);  
            if ($identity_containers->failed()) { 
                $status = $identity_containers->status(); 
                if($status == 409){
                    $errors[] = $identity_containers['title'];   
                }
                if($status == 400){  
                    $errors = $json_identity_containers['errors'];
                    return response([
                        'status' => $identity_containers->status(),
                        'success'  => false,
                        'errors' => $errors,
                    ]);
                } 
                return response([
                    'status' => $identity_containers->status(),
                    'success'  => false,
                    'errors' => $errors,
                ]);
               
            }else{
                if ($identity_containers->successful()) {
                    $user->fortress_id =  $json_identity_containers['id'];
                    $user->fortress_personal_identity =  $json_identity_containers['personalIdentity'];
                    $user->save();
                }
            }   
        }catch(Exception $identity_containers_error){ 
            $errors[] = 'Error While Creating Identity Containers';
            $errors[] = $identity_containers_error;
            return response([ 
                'errors' => $errors,
                'success'  => false,
            ]);
        }
        

        try{ 
            $mediaCollection = $user->getFirstMedia('kyc_document_collection');  
            $path =  $mediaCollection->getFullUrl();
            $doc_front = fopen($path, 'r');  
           // $doc_front = "https://mgmotors.com.pk/storage/img/details_4/homepage_models-mg-zs-ev-new.jpg";
            $url = $access_url.'personal-identities/'.$user->fortress_personal_identity.'/documents';
            $upload_document = Http::attach('DocumentType', 'passport')->
            attach('DocumentFront', $doc_front)->
            //attach('DocumentBack', $doc_front)->
            withToken($token_json['access_token'])->
            post($url);
            $json_upload_document =  json_decode((string) $upload_document->getBody(), true);
            if ($upload_document->failed()) {
                $status = $upload_document->status();
                if($status == 400){  
                    $errors[] = $json_upload_document['errors'];
                    $errors[] = $json_upload_document['title'];  
                    $errors[] = 'Personal Identity Has Been Created But Error While Uploding Documents';
                    return response([
                        'status' => $upload_document->status(),
                        'success'  => false,
                        'errors' => $errors,
                    ]);
                }    
                return response([
                    'status' => $upload_document->status(),
                    'data'   => $json_upload_document,
                    'errors' => $errors,
                    'success'  => false,
                ]); 
            }
            if($upload_document->requestTimeout()){
                $errors[] = 'Request Time OUT';
                return response([
                    'status' => $upload_document->status(),
                    'data'   => $json_upload_document,
                    'errors' => $errors,
                    'success'  => false,
                ]); 
            } 
        }catch(Exception $upload_document_error){ 
            $errors[] = 'Error While uploading Documents';
            $errors[] = $upload_document_error;
            return response([ 
                'data'   => $upload_document_error,
                'success'  => false,
                'errors' => $errors,
            ]);
        }
       
        try{ 
            
            $check_user_kyc_level = Http::withToken($token_json['access_token'])->
            withHeaders(['Content-Type' => 'application/json'])->
            get($access_url.'personal-identities/'.$user->fortress_personal_identity);
            $json_check_user_kyc_level = json_decode((string) $check_user_kyc_level->getBody(), true);  
            KYC::updateOrCreate(
                ['user_id' => $user->id],
                ['kyc_level' => $json_check_user_kyc_level['kycLevel'],'doc_status'=>$json_check_user_kyc_level['documents'][0]['documentCheckStatus']]
            );
            
            return response([
                'status' => $check_user_kyc_level->status(),
                'data'   => $json_upload_document,    
                'errors' => $errors,
                'success'  => true,
            ]); 

        }catch(Exception $upload_document_error){
            return response([ 
                'success'  => false,
                'data'   => $json_check_user_kyc_level,
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
            Mail::to($user)->send(new UploadDocument($user));
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
