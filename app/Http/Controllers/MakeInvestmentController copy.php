<?php

namespace App\Http\Controllers;

use App\Models\AccountGUID;
use App\Models\Custodial;
use App\Models\ExternalAccount;
use App\Models\InvestmentStep;
use App\Models\MemberGuid;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use CURLFile;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use  Illuminate\Support\Collection;
use File;
use Illuminate\Support\Facades\DB;

class MakeInvestmentController extends Controller
{

    public function make()
    {
        $user = User::with('userDetail', 'identityVerification')->find(Auth::user()->id);
        return view('investment.make', compact('user'));
    }
    public function detail($id)
    {
        $key = $_ENV['MAIL_USERNAME'] = 'tayyy';
        $key2 = $_ENV['MAIL_USERNAME'];
       // dd($key2);
        $offer = Offer::with('investmentRestrictions')->find($id);
        return view('investment.detail', compact('offer'));
    }
    public function submitInvestment(Request $request)
    {
        $request->validate([
            'offer_id' => 'required',
            'investment_amount' => 'integer',
        ]);
        $investment_amount = $request->investment_amount;
        $offer = Offer::with('user', 'user.userDetail', 'investmentRestrictions', 'offerDetail','investmentSteps')->
        find($request->offer_id);
        $investment_step = InvestmentStep::where('offer_id',$offer->id)->where('priority',1)->first();
        $user = User::where('id', Auth::user()->id)->first();
        $fortress_personal_identity = Auth::user()->fortress_personal_identity;
        $fortress_id = Auth::user()->fortress_id;
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
        if($get_token->failed()){
            return redirect()->back()->with('error','Internal Server Error');
        }
        $url_widget = "https://api.sandbox.fortressapi.com/api/trust/v1/external-accounts/financial/widget-url/".$fortress_personal_identity;
        $widget = Http::withToken($token_json['access_token'])->get($url_widget);
        $json_widget =  json_decode((string) $widget->getBody(), true);
        dd($json_widget);
        $url_member = "https://api.sandbox.fortressapi.com/api/trust/v1/financial-institutions/sandbox/members/".$fortress_personal_identity;
        $member = Http::withToken($token_json['access_token'])->get($url_member);
        $json_member =  json_decode((string) $member->getBody(), true);
        
        if ($member->failed()) {
            return redirect()->back()->with('error','Internal Server Error');
        }
        if($member->successful()){
            dd($json_member);
            foreach ($json_member['data'] as $data) {
                MemberGuid::updateOrCreate(
                    ['user_id' => Auth::user()->id, 'offer_id' => $request->offer_id],
                    [
                        'offer_id' => $request->offer_id,
                        'memberGuid' => $data['memberGuid'],
                        'name' => $data['name'],
                        'connectionStatus' => $data['connectionStatus']
                    ]
                );
            }
        }
       
        $get_guid = MemberGuid::where('offer_id', $request->offer_id)->where('user_id', Auth::user()->id)->first();
        $connect_g_uid_url = "https://api.sandbox.fortressapi.com/api/trust/v1/financial-institutions/members/";
        $connect_g_uid = Http::withToken($token_json['access_token'])->post(
            $connect_g_uid_url,
            [
                'identityId' => $fortress_personal_identity,
                'memberGuid' => $get_guid->memberGuid,
            ]
        );
        $json_connect_g_uid =  json_decode((string) $connect_g_uid->getBody(), true);
        if($connect_g_uid->failed()) {
            if($connect_g_uid->status() == 409){
                $url_account_id = "https://api.sandbox.fortressapi.com/api/trust/v1/financial-institutions/accounts/" . $fortress_personal_identity . "/" . $get_guid->memberGuid;
                $account_id = Http::withToken($token_json['access_token'])->get($url_account_id);
                $json_account_id =  json_decode((string) $account_id->getBody(), true);
                $account_db =  AccountGUID::updateOrCreate(
                    ['user_id' => Auth::user()->id, 'offer_id' => $request->offer_id],
                    ['offer_id' => $request->offer_id, 'name' => $json_account_id[0]['name'], 'accountNumberLast4' => $json_account_id[0]['name'], 'accountGuid' => $json_account_id[0]['accountGuid'], 'financialInstitutionName' => $json_account_id[0]['financialInstitutionName'], 'accountType' => $json_account_id[0]['accountType'], 'smallLogoUrl' => $json_account_id[0]['smallLogoUrl'], 'mediumLogoUrl' => $json_account_id[0]['mediumLogoUrl']]
                );
            }
        }else{
            $url_account_id = "https://api.sandbox.fortressapi.com/api/trust/v1/financial-institutions/accounts/" . $fortress_personal_identity . "/" . $get_guid->memberGuid;
                $account_id = Http::withToken($token_json['access_token'])->get($url_account_id);
                $json_account_id =  json_decode((string) $account_id->getBody(), true);
                $account_db =  AccountGUID::updateOrCreate(
                    ['user_id' => Auth::user()->id, 'offer_id' => $request->offer_id],
                    ['offer_id' => $request->offer_id, 'name' => $json_account_id[0]['name'], 'accountNumberLast4' => $json_account_id[0]['name'], 'accountGuid' => $json_account_id[0]['accountGuid'], 'financialInstitutionName' => $json_account_id[0]['financialInstitutionName'], 'accountType' => $json_account_id[0]['accountType'], 'smallLogoUrl' => $json_account_id[0]['smallLogoUrl'], 'mediumLogoUrl' => $json_account_id[0]['mediumLogoUrl']]
                );
        }
     
        $url_external_acc = "https://api.sandbox.fortressapi.com/api/trust/v1/external-accounts/financial";
        $external_acc = Http::withToken($token_json['access_token'])->post(
            $url_external_acc,
            [
                'identityId' => $fortress_personal_identity,
                'financialAccountId' => $account_db->accountGuid,

            ]
        );
        $json_external_acc =  json_decode((string) $external_acc->getBody(), true);
        $external_account =  ExternalAccount::updateOrCreate(
            ['user_id' => Auth::user()->id, 'offer_id' => $request->offer_id],
            [
                'offer_id' => $request->offer_id, 'external_account_id' => $json_external_acc['id'],
                'identityId' => $json_external_acc['identityId'],
                'type' => $json_external_acc['type'],
                'accountNumberLast4' => $json_external_acc['accountNumberLast4']
            ]
        );

        // Check Next Step 
        $top_nav =  $offer->investmentSteps;
        if($investment_step->title == 'Select Account Type'){
            return view('investment.step-1-account-type', compact('top_nav','offer', 'user','external_account','investment_amount'));
        }
        if($investment_step->title == 'Complete Account Form'){
            return view('investment.step-2-verify-identity', compact('top_nav','offer', 'user','external_account','investment_amount'));
        }
        if($investment_step->title == 'Accreditation'){
            return view('investment.step-1-account-type', compact('top_nav','offer', 'user','external_account','investment_amount'));
        }
        if($investment_step->title == 'E-Sign Document'){
            return view('investment.step-1-account-type', compact('top_nav','offer', 'user','external_account','investment_amount'));
        }
        if($investment_step->title == 'Payment Method'){
            return view('investment.step-1-account-type', compact('top_nav','offer', 'user','external_account','investment_amount'));
        }

        
       
    }
    public function step_two(Request $request)
    { 
      
        $request->validate([
            'external_account' => 'required',
            'offer_id' => 'required',
            'investment_amount'=>'required',
        ]);
        $user = User::where('id', Auth::user()->id)->first();
        $external_account = $request->external_account;
        $offer_id = $request->offer_id;
        $investment_amount = $request->investment_amount;
        $offer = Offer::with('user', 'user.userDetail', 'investmentRestrictions', 'offerDetail','investmentSteps')->
        find($request->offer_id);
        $top_nav =  $offer->investmentSteps;
        return view('investment.step-2-verify-identity',compact('external_account','offer','investment_amount','user','top_nav'));
    }
     public function step_three(Request $request)
    { 
       
        $request->validate([
            'external_account' => 'required',
            'investment_amount' => 'required',
            'offer_id'=>'required',
        ]);
      
       
        $user = User::where('id', Auth::user()->id)->first();
        $external_account = $request->external_account;
        $offer_id = $request->offer_id;
        $investment_amount = $request->investment_amount;
        
        return view('investment.step-3-investment-limits',compact('external_account','offer_id','investment_amount','user'));
    }

    public function step_four(Request $request)
    {
      
        $request->validate([
            'external_account' => 'required',
            'investment_amount' => 'required',
            'offer_id'=>'required',
        ]);
        $user = User::where('id', Auth::user()->id)->first();
        $offer = Offer::where('id',$request->offer_id)->first();
        $external_account = $request->external_account;
        $offer_id = $request->offer_id;
        $investment_amount = $request->investment_amount;
        return view('investment.step-4-payment_method',compact('offer','external_account','offer_id','investment_amount','user'));
    }
    public function step_five(Request $request){
     
        $request->validate([
            'external_account' => 'required',
            'investment_amount' => 'required',
            'offer_id'=>'required',
        ]);
        
        $user = User::where('id', Auth::user()->id)->first();
        $offer = Offer::where('id',$request->offer_id)->first();
        $external_account = $request->external_account;
        $offer_id = $request->offer_id;
        $investment_amount = $request->investment_amount;
      
        return view('investment.step-5-e-sign',compact('offer','external_account','offer_id','investment_amount','user'));
    }
    public function e_template(Request $request){
        
        $e_sign = Http::get('https://esignatures.io/api/templates?token=3137a61a-7db9-41f9-b2bd-39a8d7918fb5');
        $json_e_sign = json_decode((string) $e_sign->getBody(), true);
        if($e_sign->successful()){
            return response([
                'status'=> true,
                'data'=>$json_e_sign
            ]);
        }
        
    }
    public function kyc_checking(Request $request)
    {
        
        try{
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
                $upgrade_existing_l0 = Http::withToken($response_json['access_token'])->
                withHeaders(['Content-Type' => 'application/json'])->
                get('https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/'.Auth::user()->fortress_personal_identity);
                $json_upgrade_existing_l0 = json_decode((string) $upgrade_existing_l0->getBody(), true);
                if($upgrade_existing_l0->successful()){
                   //dd($upgrade_existing_l0->status());
                    return response([
                        'status'=>$upgrade_existing_l0->status(),
                        'data'=>$json_upgrade_existing_l0,
                    ]);
                }   
            }else{ 
                return response([
                    'status'=>false,
                    'message'=>ucfirst($response_json['error']),
                ]);
            } 
        }catch(Exception $error){
            return response([
                'status'=>false,
                'message'=>'Internal Server Error',
            ]);
        }

       
        
        
       
    }
    public function save(Request $request)
    {
      
        $request->validate([
            'offer_id' => 'required',
            'external_account' => 'required',
            'investment_amount'=> 'required',
            'templates'=> 'required'
        ]);
      
        $offer = Offer::with('user')->findOrFail($request->offer_id);  
        try{
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
        }catch(Exception $error){
           return redirect()->route('dashboard');
        }
     
       
        
        try{
            DB::beginTransaction();
            $custodial_account = Custodial::where('offer_id', $request->offer_id)->first(); 
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.sandbox.fortressapi.com/api/trust/v1/payments',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                "source": {
                    "externalAccountId": "'.$request->external_account.'"
                },
                "destination": {
                    "custodialAccountId": "'.$custodial_account->custodial_id.'"
                },
                "comment": "Offering Payment",
                "funds": '.$request->investment_amount.'
                }',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer '.$token_json['access_token'],
                    'Content-Type: application/json'
                ),
            ));
            $response_ach = curl_exec($curl);
            curl_close($curl);
            $json_response_ach = json_decode($response_ach); 
    
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://esignatures.io/api/contracts?token=3137a61a-7db9-41f9-b2bd-39a8d7918fb5',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
            "template_id":"'.$request->templates.'",
            "title":"Loan Agreement - Saver package",
            "metadata":"ID0001",
            "locale":"en",
            "test":"no",
            "custom_webhook_url":"https://google.com",
            "signers":[
                {
                    "name":"'.$offer->user->name.'",
                    "email":"'.$offer->user->email.'",
                    "mobile":"'.$offer->user->phone.'",
                    "company_name":"Investor Company",
                "signing_order":"1",
                "auto_sign":"no",
                "signature_request_delivery_method":"email",
                "signed_document_delivery_method":"email",
                "required_identification_methods":[
                    "email",
                    "sms"
                ],
                    "redirect_url":"https://your-website.com/aftersign",
                    "embedded_redirect_iframe_only":"no"
                },
                {
                    "name":"'. Auth::user()->name .'",
                    "email":"'.Auth::user()->email.'",
                    "mobile":"'.Auth::user()->phone.'",
                    "company_name":"Issuer Company",
                    "signing_order":"1",
                    "auto_sign":"no",
                    "signature_request_delivery_method":"email",
                    "signed_document_delivery_method":"email",
                    "required_identification_methods":[
                        "email",
                        "sms"
                    ],
                "redirect_url":"https://your-website.com/aftersign",
                "embedded_redirect_iframe_only":"no"
            }
            ],
            "placeholder_fields":[
                {
                    "api_key":"interest_rate",
                    "value":"3.2%"
                },
                {
                    "api_key":"floor-plan",
                    "document_elements":[
                        {
                        "type":"image",
                        "image_base64":"iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVQIW2P4v5ThPwAG7wKklwQ/bwAAAABJRU5ErkJggg=="
                        }
                    ]
                }
            ],
            "signer_fields":[
                {
                    "signer_field_id":"preferred_term",
                    "default_value":"15 years"
                }
            ],
            "emails":{
                "signature_request_subject":"Your document is ready to sign",
                "signature_request_text":"Hi __FULL_NAME__, \\n\\n To review and sign the contract please press the button below \\n\\n Kind Regards",
                "final_contract_subject":"Your document is signed",
                "final_contract_text":"Hi __FULL_NAME__, \\n\\n Your document is signed.\\n\\nKind Regards",
                "cc_email_addresses":[
                    "tom@email.com",
                    "francis@email.com"
                ],
                "reply_to":"support@customdomain.com"
            },
            "custom_branding":{
                "company_name":"WhiteLabel LLC",
                "logo_url":"https://online-logo-store.com/yourclient-logo.png"
            }
            }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
            ));
            
            $response = curl_exec($curl);
            curl_close($curl); 
            $order = new Order();
            $order->offer_id = $offer->id;
            $order->investor_id = Auth::user()->id;
            $order->total = $request->investment_amount;
            $order->currency = $json_response_ach->currency;
            $order->type = $json_response_ach->type;
            $order->payment_method = 'wire';
            $order->e_sign = 'incomplete';
            $order->status = 'pending';
            $order->save();

            $db_transaction = new Transaction;
            $db_transaction->order_id = $order->id;
            $db_transaction->offer_id = $offer->id;
            $db_transaction->investor_id = Auth::user()->id;
            $db_transaction->funds =$request->investment_amount;
            $db_transaction->kyc_status = '---';
            $db_transaction->status = 'will-set';
            $db_transaction->type = $json_response_ach->type;
            $db_transaction->payment_method = 'wire';
            $db_transaction->e_sign = 'incomplete'; 
            $db_transaction->transaction_id = $json_response_ach->id;   
            $db_transaction->source_identityId = $json_response_ach->source->identityId;
            $db_transaction->source_externalAccountId = $json_response_ach->source->externalAccountId; 
            $db_transaction->destination_identityId = $json_response_ach->destination->identityId;
            $db_transaction->destination_custodialAccountId = $json_response_ach->destination->custodialAccountId; 
            $db_transaction->comment = $json_response_ach->comment;
            $db_transaction->funds = $json_response_ach->funds;
            $db_transaction->currency = $json_response_ach->currency;
            $db_transaction->save(); 
            DB::commit(); 
             return redirect()->route('dashboard')->with('success','Investment Has Been Completed');
        }catch(Exception $error){ 
            DB::rollBack();
            return redirect()->route('dashboard')->with('error','Internal Server Error');
        }
        


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
