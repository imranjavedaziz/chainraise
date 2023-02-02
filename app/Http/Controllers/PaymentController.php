<?php

namespace App\Http\Controllers;

use App\Models\AccountGUID;
use App\Models\Custodial;
use App\Models\ExternalAccount;
use App\Models\MemberGuid;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\WidgetUrl;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $offer = Offer::findOrFail($request->id); 
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
            DB::beginTransaction();
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
            $order = new Order;
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
            dd(1);
            return response([
                'status'=>true,
                'message'=>'Payment has been completed'
            ]);

        }catch(Exception $error){
            DB::rollBack();
            return response([
                'status'=>false,
                'message'=>'Error while processing payment'
            ]);
        }
        


    }
}
