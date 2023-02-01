<?php

namespace App\Http\Controllers;

use App\Models\AccountGUID;
use App\Models\Custodial;
use App\Models\ExternalAccount;
use App\Models\MemberGuid;
use App\Models\Offer;
use App\Models\Transaction;
use App\Models\WidgetUrl;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function ach(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'external_account' => 'required',
            'investment_amount'=> 'required'
        ]);

        //dd($request->investment_amount);
        $offer = Offer::find($request->id); 
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
            return response([
                'error'=>true,
            ]);
        }
        try{
        
            $custodial_account = Custodial::where('offer_id', $request->id)->first();
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
             
            // $transaction_url = "https://api.sandbox.fortressapi.com/api/trust/v1/payments/".$json_response_ach->id;
            // $transaction = Http::withToken($token_json['access_token'])->get($transaction_url);
            // $json_transaction = json_decode($transaction);
                $db_transaction = new Transaction;
                $db_transaction->transaction_id = $json_response_ach->id;
                $db_transaction->type = $json_response_ach->type;
                $db_transaction->status = $json_response_ach->status;
                
                $db_transaction->source_identityId = $json_response_ach->source->identityId;
                $db_transaction->source_externalAccountId = $json_response_ach->source->externalAccountId;

                $db_transaction->destination_identityId = $json_response_ach->destination->identityId;
                $db_transaction->destination_custodialAccountId = $json_response_ach->destination->custodialAccountId;

                $db_transaction->comment = $json_response_ach->comment;
                $db_transaction->funds = $json_response_ach->funds;
                $db_transaction->currency = $json_response_ach->currency;
                $db_transaction->save();
                $db_transaction->save();
                return response([
                'status'=>true,
                'message'=>'Payment has been completed'
               ]);

        }catch(Exception $error){
                return response([
                    'status'=>false,
                    'message'=>'Error while processing payment'
               ]);
        }
        


    }
}
