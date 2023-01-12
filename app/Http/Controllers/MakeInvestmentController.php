<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\User;
use Carbon\Carbon;
use CURLFile;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use  Illuminate\Support\Collection;
use File; 
class MakeInvestmentController extends Controller
{

    public function make()
    {
        $user = User::with('userDetail', 'identityVerification')->find(Auth::user()->id);
        return view('investment.make', compact('user'));
    }
    public function detail($id)
    {
        $offer = Offer::with('investmentRestrictions')->find($id);
        return view('investment.detail', compact('offer'));
    }
    public function submitInvestment(Request $request)
    {

        $request->validate([
            'offer_id' => 'required',
            'investment_amount' => 'integer',
        ]);
        $offer = Offer::with('user', 'user.userDetail', 'investmentRestrictions', 'offerDetail')->find($request->offer_id);
        $user = User::where('id', Auth::user()->id)->first();
        return view('investment.account-type', compact('offer', 'user'));
    }

    public function kycSubmit(Request $request)
    {
        // Create Barear Token
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://fortress-sandbox.us.auth0.com/oauth/token', [
            'grant_type' => 'password',
            'username'   => 'tayyabshahzad@sublimesolutions.org',
            'password'   => 'x0A1PGhevtkJu4qeXBXF',
            'audience'   => 'https://fortressapi.com/api',
            'client_id'  => 'pY6XoVugk1wCYYsiiPuJ5weqMoNUjXbn',
        ]);
        $response_json =  json_decode((string) $response->getBody(), true);
        if($response->successful()){
            $dob = Carbon::parse($request->dob)->format('Y-m-d');
            $identity_containers = Http::withToken($response_json['access_token'])->withHeaders([
                'Content-Type' => 'application/json',
            ])->post('https://api.sandbox.fortressapi.com/api/trust/v1/identity-containers', [
                'firstName' => $request->first_name,
                'middleName' => $request->middle_name,
                'lastName' => $request->last_name,
                'phone' =>  $request->phone,
                'email' =>'sarim_khan@hotmail.com',
                'dateOfBirth' => $dob,
                'ssn' =>$request->primary_contact_social_security,
                'address.street1' => $request->address,
                'address.street2' => '-',
                'address.postalCode' => $request->zip,
                'address.city' => $request->city,
                'address.state' => $request->state,
                'address.country' => $request->nationality,
            ]);
            $json_identity_containers =  json_decode((string) $identity_containers->getBody(), true);
            if($identity_containers->successful()){
               
               
                dd('success');
            
            
            }else{
                return response([
                    'status' => $identity_containers->status(),
                    'data'   => $json_identity_containers,
                ]);
            }


        }else{
            return response([
                'status'=>false,
                'message'=>ucfirst($response_json['error']),
            ]);
        }
       dd(1);
        // Create Identity Container
        // dd($response_json['access_token']);
       //dd($request->documents);
      
         
         // Create Custodial Account
         $custodial_accounts = Http::withToken($response_json['access_token'])->withHeaders([
            'accept' => 'application/json',
            'content-type' => 'application/*+json',
        ])->post('https://api.sandbox.fortressapi.com/api/trust/v1/custodial-accounts', [
            'type' => $request->account_type,
            'personalIdentityId' => $response_json_2['personalIdentity'],
            //'businessIdentityId' => '',
        ]);
        $response_json_3 =  json_decode((string) $custodial_accounts->getBody(), true);
        dd($response_json_3);

        //Testing ACH In Sandbox









        //dd($response_json['access_token']);
        //dd($response_json);
//         $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/e5f46c21-efea-414f-9aae-61e7c16bf05c/documents',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS => array('DocumentType' => 'license','DocumentFront'=> new CURLFILE($fileContent),'DocumentBack'=> new CURLFILE('/path/to/file'),'SelfPortrait'=> new CURLFILE('/path/to/file')),
//   CURLOPT_HTTPHEADER => array(
//     'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6IlYycEtyLTlQUGotRVFLR1d4cV8yMiJ9.eyJodHRwczovL2ZvcnRyZXNzYXBpLmNvbS9vcmdhbml6YXRpb25faWQiOiI3YzZmMzhlMC1lMGJkLTQ3NDYtOGI3Ny03OWU5MTFjOTE5OGEiLCJpc3MiOiJodHRwczovL2ZvcnRyZXNzLXNhbmRib3gudXMuYXV0aDAuY29tLyIsInN1YiI6ImF1dGgwfDYzYWNhMjlmZmYxOTZmZjcxZWZmNDc5MSIsImF1ZCI6Imh0dHBzOi8vZm9ydHJlc3NhcGkuY29tL2FwaSIsImlhdCI6MTY3MzAzMDM5MywiZXhwIjoxNjczMDMzOTkzLCJhenAiOiJwWTZYb1Z1Z2sxd0NZWXNpaVB1SjV3ZXFNb05ValhibiIsImd0eSI6InBhc3N3b3JkIn0.h5cWtXTSSJgweT-EcEpF19PNLjWyENXzEjJBqA2NUW-cXBmmoUwYpfPxmORi1Yrm6LrogMX9rVGp2lTdOPWhRai9C7a4YuW315uPvReR-9yIuAk3wt4lAWwDAU_sXKzhY2uRiDdYHb-0U1jixhZ3HkAdK8ZpUdvohsxUaPZmEkCgRQIJ2DzaWcITOqR5PB_qb49M3_UMHow6vW2RKpAviS1XDMO-ed1BA4hdlihlIdfyuC4Po3nhuN8Yk1OBxmMd6-y_Xx7Bf-spKaNfKFUrPoO_gD4eh7iao3KM9dLwHcjBl8dc99OznUE-pxJvXCzWCQWzVJ78SEizt_gaVAuskg'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;

         // dd($response_json);
        //     $firstName = $request->first_name;
        //     $middle_name = $request->middle_name;
        //     $last_name = $request->last_name;
        //     $phone = $request->phone;
        //     $dob =  Carbon::parse($request->dob)->format('Y-m-d');
        //     $email = Auth::user()->email;
        //     $street1 = $request->address;
        //     $street2 = $request->address;
        //     $postalCode = $request->zip;
        //     $city = $request->city;
        //     $state = $request->state;
        //     $country = $request->nationality;
        //     $ssn = $request->primary_contact_social_security;

        // $identity_containers = Http::withToken($response_json['access_token'])->withHeaders([
        //     'Content-Type' => 'application/json',
        // ])->post('https://api.sandbox.fortressapi.com/api/trust/v1/identity-containers', [
        //     'firstName' => 'Jhon-3110',
        //     'middleName' => 'Jhon',
        //     'lastName' => 'Doi',
        //     'phone' => '+929019729989',
        //     'email' => 'jqJP01@gmail.com.com ',
        //     'dateOfBirth' => '1992-09-12',
        //     'ssn' => '172-69-4912',
        //     'address.street1' => 'Islamabad',
        //     'address.street2' => 'Islamabad',
        //     'address.postalCode' => '44000',
        //     'address.city' => 'RWP',
        //     'address.state' => 'Punjab',
        //     'address.' => 'PK',
        // ]);
        //  $response_json_2 =  json_decode((string) $identity_containers->getBody(), true);
        //  dd($response_json_2);




  


       
    }



    public function verify_identity(Request $request)
    {
        return view('investment.verify_identity');
    }
    public function investment_limits(Request $request)
    {
        return view('investment.account-type');
    }
}
