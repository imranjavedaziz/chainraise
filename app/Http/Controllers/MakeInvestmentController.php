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
        $fileContent = 'http://127.0.0.1:8000/assets/media/avatars/300-1.jpg';
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




        $image_path = $request->file('documents')->getPathname();
        
        $client = new \GuzzleHttp\Client();
        
        $response = $client->request('POST', 'https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/2393129e-f014-4079-93a9-300d11efaae8/documents', 
        [
          'multipart' => [
                [
                    'name' => 'DocumentFront',
                    'contents' =>fopen($image_path,'r'),
                ],
                [
                    'name' => 'DocumentType',
                    'contents' => 'identificationCard'
                ]
            ],
          'headers' => [
            'accept' => 'application/json',
          ],
        ]);
        
        echo $response->getBody();
dd(1); 
        $new_client = new \GuzzleHttp\Client();
        $response_2 = $new_client->post('https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/1cf0ea94-1389-40b1-b4f9-80ebf20b952d/documents', [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6IlYycEtyLTlQUGotRVFLR1d4cV8yMiJ9.eyJodHRwczovL2ZvcnRyZXNzYXBpLmNvbS9vcmdhbml6YXRpb25faWQiOiI3YzZmMzhlMC1lMGJkLTQ3NDYtOGI3Ny03OWU5MTFjOTE5OGEiLCJpc3MiOiJodHRwczovL2ZvcnRyZXNzLXNhbmRib3gudXMuYXV0aDAuY29tLyIsInN1YiI6ImF1dGgwfDYzYWNhMjlmZmYxOTZmZjcxZWZmNDc5MSIsImF1ZCI6Imh0dHBzOi8vZm9ydHJlc3NhcGkuY29tL2FwaSIsImlhdCI6MTY3MzM2ODQ2MSwiZXhwIjoxNjczMzcyMDYxLCJhenAiOiJwWTZYb1Z1Z2sxd0NZWXNpaVB1SjV3ZXFNb05ValhibiIsImd0eSI6InBhc3N3b3JkIn0.cpWmNxIhjm9Zg8BC_4l63k5L0qnjpApACQttHlIUNURDnYvbeY3nTtq-2Dy0BdAiWS24Rwu4Es4X5LS_5WwQCi1ggLY7fSPg0Fcg81vkCs0Wh9hmYkMF8h3_y7KJ-02k593mn8Z_kSg0DdNM7gIfnoKIqJ1tojBCAS5hw1sUh1OrEUcuGQ8IvtH1QcR1d7Reb8e7E_o1pZ-EMY-J9PIHGUsZkwJjceIgd11V5hZdoNwAG7Vw1UZ8qctNk8uBeaISdC32i-8BmMN4jPTfj-lrrq_s-dOkY7l196AHusBB0HHelIeLuMnqchvi4qQSveic3xHBMIMLKMiNxb3VVmOGmA',
            ],
            'multipart' => [
                [
                    'name'     => 'DocumentType',
                    'contents' => fopen($image_path,'r'),
                ],
                [
                    'name' => "DocumentType",
                    'contents' => "identificationCard",
                ],
            ]
        ]);

        dd(json_decode((string) $response_2->getBody(), true));
        // $url = "https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/e5f46c21-efea-414f-9aae-61e7c16bf05c/documents";
        //    // dd($response_json['access_token'])
      
        
        // $request = Http::withToken($response_json['access_token'])->post($url, [
        //     'multipart' => [
        //         [
        //             'name' => 'DocumentType',
        //             'contents'=>'license'
        //         ],
        //         [
        //         'name' => 'DocumentFront',
        //         'filename' =>'DocumentFront',
        //         'contents' => $fileContent,
        //         'headers' => [
        //             'Content-Type' => 'image/png'
        //         ]
        //         ],
        //     ]
        // ]);
        // $response_json_document =  json_decode((string) $request->getBody(), true);
        // dd($response_json_document);

        


        // $curl = curl_init();
        // //$cfile = curl_file_create($_FILES['file']['tmp_name'],$_FILES['file']['type'],$_FILES['file']['name']);
        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => 'https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/ceedb7fd-8501-4d8d-a7da-991b6ffc1013/documents',
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => '',
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => 'POST',
        //   CURLOPT_POSTFIELDS => array('DocumentType' => 'passport','filename','tesla mor','DocumentFront'=> new CURLFILE('http://127.0.0.1:8000/assets/media/avatars/300-1.jpg')),
        //   CURLOPT_HTTPHEADER => array(
        //     'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6IlYycEtyLTlQUGotRVFLR1d4cV8yMiJ9.eyJodHRwczovL2ZvcnRyZXNzYXBpLmNvbS9vcmdhbml6YXRpb25faWQiOiI3YzZmMzhlMC1lMGJkLTQ3NDYtOGI3Ny03OWU5MTFjOTE5OGEiLCJpc3MiOiJodHRwczovL2ZvcnRyZXNzLXNhbmRib3gudXMuYXV0aDAuY29tLyIsInN1YiI6ImF1dGgwfDYzYWNhMjlmZmYxOTZmZjcxZWZmNDc5MSIsImF1ZCI6Imh0dHBzOi8vZm9ydHJlc3NhcGkuY29tL2FwaSIsImlhdCI6MTY3MjkzNzQ2MiwiZXhwIjoxNjcyOTQxMDYyLCJhenAiOiJwWTZYb1Z1Z2sxd0NZWXNpaVB1SjV3ZXFNb05ValhibiIsImd0eSI6InBhc3N3b3JkIn0.DN550RfCwjS_vFcb8xlDNLfdZUewl-H9IRisB0NlML3bSyv8ipct5LyrHTqScdAKdvK7-AE_FEB84l3ScDySMPl8HdnDtYUzQ9Y4psBuMclJaJXCrZBfkSq7k25Asm9ekLj_OheZEikn3Ur7cKlZ0yvCccRhtP1yduoi4p5XUNyQTCarDagOMtFjKNAbc4CzzgVK5V_2nVqxLr_DdATVNxWsTUPmsWZGLLO_z07aa4rk-U5P8_QqqK7gpm88BBqyeyHj9hClLxSBXl7gUjwNbyjwivEmOGfqM_dg1rVIo2xni1G6HvrangXUcI64G1-3twGuQObf2PBtok4nQstoKA'
        //   ),
        // ));

        // $response22 = curl_exec($curl);

        // curl_close($curl);
        // echo $response;


        // if(isset($response2->status)){
        //     return response([
        //         'status'=>false,
        //         'message'=> $response2->title
        //     ]);
        // }else{

        //     if($request->has('documents')){
        //         //$user = Auth::user();
        //         //$user->clearMediaCollection('kyc_document');
        //         //$user->addMediaFromRequest('documents')->toMediaCollection('kyc_document');
        //         //$document_path = $user->getFirstMediaUrl('kyc_document', 'thumb');
        //         $file = $request->file('documents');
        //         $original_name = $file->getClientOriginalName();
        //         $file_path = $file->getPathName();
        //         $identity_id =  $response2->personalIdentity;
        //         $curl = curl_init();

        //         curl_setopt_array($curl, array(
        //         CURLOPT_URL => '#',
        //         CURLOPT_RETURNTRANSFER => true,
        //         CURLOPT_ENCODING => '',
        //         CURLOPT_MAXREDIRS => 10,
        //         CURLOPT_TIMEOUT => 0,
        //         CURLOPT_FOLLOWLOCATION => true,
        //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //         CURLOPT_CUSTOMREQUEST => 'POST',
        //         CURLOPT_POSTFIELDS => array('DocumentType' => 'passport','DocumentFront'=> new CURLFILE('')),
        //         CURLOPT_HTTPHEADER => array(
        //             'Authorization: Bearer '.$token
        //         ),
        //         ));

        //         $response = curl_exec($curl);
        //         curl_close($curl);
        //         $response3 =  json_decode($response);
        //         dd($response);




        //     }



        //     return response([
        //         'status'=>true, 
        //     ]);
        // }


        // Create  Custodial-accounts


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
