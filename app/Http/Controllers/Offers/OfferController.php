<?php

namespace App\Http\Controllers\Offers;

use Exception;
use App\Models\KYC;
use App\Models\User;
use App\Models\Offer;
use App\Models\Access;
use App\Models\Display;
use App\Models\Custodial;
use App\Models\OfferTiles;
use App\Models\OfferVideos;
use Illuminate\Support\Str;
use App\Models\CallToAction;
use App\Models\OfferContact;
use Illuminate\Http\Request;
use App\Models\InvestmentStep;
use App\Models\OfferDetailTab;
use Illuminate\Support\Carbon;
use App\Models\OfferEsignTemplate;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\Models\InvestmentRestrication;
use Illuminate\Support\Facades\Session;
use App\Repositories\Interfaces\OfferRepositoryInterface;
use App\Repositories\Interfaces\RegCFRepositoryInterface; 

class OfferController extends Controller
{
    private $RegCFRepository;
    private $offerRepository;
    public function __construct(RegCFRepositoryInterface $RegCFRepository, OfferRepositoryInterface $offerRepository)
    {
        $this->RegCFRepository = $RegCFRepository;
        $this->offerRepository = $offerRepository;
    }
    public function active_index()
    {
        $issuers = User::role('issuer')->get();
        $offers = Offer::where('status','active')->orderBy('id','desc')->get();
        return view('offers.active_index',compact('issuers','offers'));
    }

    public function inactive_index()
    {
        $issuers = User::role('issuer')->get();
        $offers = Offer::where('status','inactive')->orderBy('id','desc')->get();
        return view('offers.inactive_index',compact('issuers','offers'));
    }


    public function edit($id)
    {
        $offer = Offer::with('contactInfo','access','user','display','investmentRestrictions','access','callToAction','offerDetail','offerDetail.offerTiles','offerVideos','contactInfo')->find($id);
         
        $issuers = User::role('issuer')->get(); 
        $photos = $offer->getMedia('offer_detail_images');
        $tiles = OfferDetailTab::where('offer_id',$id)->first();
        if($tiles){
            $tiles ->getMedia('offer_tiles');  
        }else{
           $tiles = null;
        }
       
        return view('offers.edit',compact('offer','issuers','photos','tiles'));
    }
    public function create()
    {
        try{
            $e_sign = Http::get('https://esignatures.io/api/templates?token=3137a61a-7db9-41f9-b2bd-39a8d7918fb5');
            $json_e_sign = json_decode((string) $e_sign->getBody(), true);
            if(!$e_sign->successful()){
                Session::put('error','Esignatures Error');  
                return redirect()->back();
            }
            $templates = $json_e_sign['data'];
            $issuers = User::role('issuer')->get(); 
            return view('offers.create',compact('issuers','templates'));
        }catch(Exception $error){
            return $error;
        }

        
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
    public function save(Request $request)
    {
        $production_auth = 'https://fortress-prod.us.auth0.com/oauth/token'; 
        $fortress_base_url = 'https://api.fortressapi.com/api/trust/v1/'; 
        $request->validate([
            'issuer' => 'required',
            'offer_name' => 'required',
            'slug'=>'required|unique:offers,slug',
            //'short_description' => 'required',
            //'security_type' => 'required',
           // 'symbol' => 'required',
            'size' => 'required',
            //'min_invesment'=>'required',
            //'max_invesment'=>'required'
        ]); 
        //dd($request);
        $get_token = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post($production_auth, [
            'grant_type' => 'password',
            'username'   => 'Portal@chainraise.io',
            'password'   => '?dm3JeXgkgQNA?ue8sHI',
            'audience'   => 'https://fortressapi.com/api',
            'client_id'  => 'cNjCgEyfVDyBSxCixDEyYesohVwdNICH',
        ]);
        $token_json =  json_decode((string) $get_token->getBody(), true);
        //dd($token_json);
        if($get_token->failed()){ 
            return redirect()->back()->with('error','Internal Server Error');
        }

        $user = User::find($request->issuer);
        
        if($user->check_kyc == true ){ 
            $upgrade_existing_l0 = Http::withToken($token_json['access_token'])->
            withHeaders(['Content-Type' => 'application/json'])->
            get($fortress_base_url.'personal-identities/'.$user->fortress_personal_identity);
            $json_upgrade_existing_l0 = json_decode((string) $upgrade_existing_l0->getBody(), true);
            if($upgrade_existing_l0->failed()){ 
                return redirect()->back()->with('error','Internal Server Error');
            }else{
                if($json_upgrade_existing_l0['kycLevel'] == 'L0'){ 
                    return redirect()->back()->with('error','KYC Level Must Be Greater Then L0');
                }
            }
        }
        
      
        try{
            
            $offer = new Offer;
            $offer->feature_video  = $request->feature_video_url;
            $offer->issuer_id =  $request->issuer;
            $offer->name =              $request->offer_name;
            $offer->slug =            Str::slug($request->offer_name, '-');
            $offer->short_description =  $request->short_description;
            $offer->security_type =    $request->security_type;
            $offer->symbol =      $request->symbol;
            $offer->size =        $request->size;
            $offer->size_label =    $request->size_label;
            $offer->base_currency =   $request->base_currency;
            $offer->price_per_unit =   $request->price_per_unit;
            $offer->share_unit_label =    $request->share_unit_label;
            $offer->total_valuation =     $request->total_valuation;
            $offer->commencement_date =   $request->commencement_date;
            $offer->funding_end_date =   $request->funding_end_date;
            $offer->status =              'active' ;
            if($offer->save()) {
                $priority = 0;
                foreach($request->investment_setups as $setup ){
                    if ($setup == 'E-Sign Document') {
                        $offer_esign_template = new OfferEsignTemplate;
                        $offer_esign_template->offer_id = $offer->id;
                        $offer_esign_template->template_id = $request->e_sign_template;
                        $offer_esign_template->save();
                    }
                    $priority ++;
                    $investmentStep = new InvestmentStep;
                    $investmentStep->offer_id = $offer->id;
                    $investmentStep->title = $setup;
                    $investmentStep->priority = $priority;
                    $investmentStep->save();
                }

                
                if($user->check_kyc == true ){ 
                    // Creating Custodial Accounts
                    $user = User::find($request->issuer);
                    $custodial_account = Http::withToken($token_json['access_token'])->withHeaders([
                        'Content-Type' => 'application/json',
                    ])->post($fortress_base_url.'custodial-accounts', [
                        'type' => 'personal',
                        'personalIdentityId' => $user->fortress_personal_identity,
                    ]);
                    $json_custodial_account =  json_decode((string) $custodial_account->getBody(), true);
                    if($custodial_account->failed()){
                    DB::rollBack();
                    }else{
                        $custodial = new Custodial;
                        $custodial->user_id = $request->issuer;
                        $custodial->offer_id = $offer->id;
                        $custodial->custodial_id = $json_custodial_account['id'];
                        $custodial->ownerIdentityId = $json_custodial_account['ownerIdentityId'];
                        $custodial->accountStatus = $json_custodial_account['accountStatus'];
                        $custodial->accountType = $json_custodial_account['accountType'];
                        $custodial->accountNumber = $json_custodial_account['accountNumber'];
                        $custodial->save();
                    }
                }

                if($request->hasFile('offer_image')) {
                    $offer->addMediaFromRequest('offer_image')->toMediaCollection('offer_image');
                }
                if($request->hasFile('banner_image')) {
                    $offer->addMediaFromRequest('banner_image')->toMediaCollection('banner_image');
                }
                $invesment_restriction = new InvestmentRestrication;
                if($request->min_invesment){
                    $invesment_restriction->min_invesment = $request->min_invesment;
                }else{
                    $invesment_restriction->max_invesment = 0;
                }
                if($request->min_invesment){
                    $invesment_restriction->max_invesment = $request->max_invesment;
                }else{
                    $invesment_restriction->max_invesment = 0;
                }

                if($request->allow_fractional_shares == 'on'){  
                    $allow_fractional_shares = true;
                } else{ 
                    $allow_fractional_shares = true;
                };
                $invesment_restriction->allow_fractional_shares = $allow_fractional_shares;
                if($request->require_investing_units == 'on'){  
                    $require_investing_units = true;
                } else{ 
                    $require_investing_units = true;
                };
                $invesment_restriction->require_investing_units = $require_investing_units;
                $invesment_restriction->offer_id = $offer->id;
                if($invesment_restriction->save()){
                    $call_to_action  = new CallToAction;
                    $call_to_action->offer_id = $offer->id;
                    $call_to_action->review_documents = $request->review_documents;
                    $call_to_action->invest_button_text = $request->invest_button_text;
                    $call_to_action->contact_us_button_text = $request->contact_us_button_text;
                   
                    if($request->send_notification_when_clicked == 'on'){  
                        $send_notification_when_clicked = true;
                    } else{ 
                        $send_notification_when_clicked = true;
                    };
                    $call_to_action->send_notification_when_clicked = $send_notification_when_clicked;
                    if($request->hide_contact_button == 'on'){  
                        $hide_contact_button = true;
                    }else{ 
                        $hide_contact_button = true;
                    };
                    $call_to_action->hide_contact_button = $hide_contact_button;
                    $call_to_action->alternate_notification_button = $request->alternate_notification_button;
                    if($request->use_calendly_meeting_scheduling == 'on'){  
                        $use_calendly_meeting_scheduling = true;
                    }else{ 
                        $use_calendly_meeting_scheduling = true;
                    };
                    $call_to_action->use_calendly_meeting_scheduling = $use_calendly_meeting_scheduling;
                    $call_to_action->calendly_meeting_link = $request->calendly_meeting_link;
                    $call_to_action->contact_us_external_url = $request->contact_us_external_url;
                    $call_to_action->addt_contact_emails = $request->addt_contact_emails;
                    $call_to_action->confirm_invesment_button_text = $request->confirm_invesment_button_text;
                    $call_to_action->transaction_confirmation_message = $request->transaction_confirmation_message;
                    $call_to_action->addtl_created_emails = $request->addtl_created_emails;
                    $call_to_action->learn_more_button = $request->learn_more_button;
                    $call_to_action->sign_in_button = $request->sign_in_button;
                    $call_to_action->external_url = $request->external_url;
                    if($call_to_action->save()){
                        $access  = new Access;
                        $access->offer_id =  $offer->id;
                        $access->offer_status = $request->offer_status;
                        $access->allow_list = $request->allow_list;
                        $access->deny_list = $request->deny_list;
                        if($request->allow_referrals == 'on' ){
                            $allow_referrals =true;
                        }else{
                            $allow_referrals =false;
                        }
                        $access->allow_referrals = $allow_referrals;
                        if($request->allow_non_accredited_investors == 'on' ){
                            $allow_non_accredited_investors =true;
                        }else{
                            $allow_non_accredited_investors =false;
                        }
                        $access->allow_non_accredited_investors = $allow_non_accredited_investors;
                        $access->max_number_non_accredited = $request->max_number_non_accredited;
                        if($request->allow_editing == 'on' ){
                            $allow_editing =true;
                        }else{
                            $allow_editing =false;
                        }
                        $access->allow_editing = $allow_editing;
                       
                        if($access->save()){
                               $offer_display = new Display;
                               $offer_display->offer_id = $offer->id;
                               if($request->has('enable_questions')){
                                    $offer_display->enable_questions = true;
                               }
                               if($request->has('funding_process')){
                                $offer_display->funding_process = true;
                               }
                               if($request->has('show_funding_end_countdown')){
                                $offer_display->show_funding_end_countdown = true;
                               }
                               if($request->has('show_blockchain_info')){
                                $offer_display->show_blockchain_info = true;
                               }
                               if($request->has('swap_issuer')){
                                $offer_display->swap_issuer = true;
                               }
                               if($request->has('hide_logo_container')){
                                $offer_display->hide_logo_container = true;
                               }
                               if($request->has('hide_logo_details')){
                                $offer_display->hide_logo_details = true;
                               }

                               if($request->has('hide_logo_marketplace')){
                                $offer_display->hide_logo_marketplace = true;
                               }
                               if($request->has('remove_hero_image_mask')){
                                $offer_display->remove_hero_image_mask = true;
                               }
                               if($request->has('hide_contact_us_from')){
                                 $offer_display->hide_contact_us_from = true; 
                               }
                               $offer_display->offer_tab_name = $request->offer_tab_name;
                               $offer_display->video_tab_name = $request->video_tab_name;
                               $offer_display->document_tab_name = $request->document_tab_name;
                               $offer_display->update_tab_name = $request->update_tab_name;
                               $offer_display->qa_tab_name = $request->qa_tab_name; 
                               $offer_display->save();
                               
                               $offerContact = new OfferContact;
                               $offerContact->offer_id = $offer->id;
                               $offerContact->address = $request->offer_address;
                               $offerContact->phone = $request->phone; 
                               $offerContact->contact_us = $request->contact_us; 
                               if($offerContact->save()){
                               }
                        }

                    }
                    if($request->has('src')){
                       for($i=0;$i<count($request->src);$i++){
                            $offer_videos = new OfferVideos();
                            $offer_videos->offer_id = $offer->id;
                            $offer_videos->source = $request['src'][$i];
                            $offer_videos->url = $request['url'][$i];
                            $offer_videos->description = $request['description'][$i];
                            $offer_videos->visible = $request['access'][$i];
                            $offer_videos->save(); 
                       }
                    }
                    if($request->has('summary_title')){
                        
                        for($j=0;$j<count($request->summary_title);$j++){
                            $offer_detail_tab = new OfferDetailTab();
                            $offer_detail_tab->offer_id = $offer->id;
                            $offer_detail_tab->input = 'summary';
                            $offer_detail_tab->heading = $request['summary_title'][$j];
                            $offer_detail_tab->sub_heading = $request['summary_sub_title'][$j];
                            $offer_detail_tab->description = $request['summary_sub_description'][$j];
                            $offer_detail_tab->save();
                       }
                    }
                    if($request->has('tiles_source')){
                            $offer_detail_tab = new OfferDetailTab();
                            $offer_detail_tab->offer_id = $offer->id; 
                            $offer_detail_tab->input = 'tiles';
                            $offer_detail_tab->save();  
                            $offer_detail_tab->addMultipleMediaFromRequest(['tiles_source'])
                            ->each(function ($fileAdder) use ($offer_detail_tab) {
                                $fileAdder->toMediaCollection('offer_tiles', 'public');
                            });   
                    }
            
                    if($request->has('text_title')){ 
                        for($l=0;$l<count($request->text_title);$l++){
                            $offer_detail_tab = new OfferDetailTab();
                            $offer_detail_tab->offer_id = $offer->id;
                            $offer_detail_tab->input = 'text';
                            $offer_detail_tab->heading = $request['text_title'][$l];
                            $offer_detail_tab->sub_heading = $request['text_sub_title'][$l];
                            $offer_detail_tab->description = $request['text_description'][$l];
                            $offer_detail_tab->save();
                       }
                    }
                    if($request->hasFile('image')) { 
                        $offer->addMultipleMediaFromRequest(['image'])
                        ->each(function ($fileAdder) {
                            $fileAdder->toMediaCollection('offer_detail_images');
                        });
                    } 
                    $data = [
                        'offer_id' => $offer->id,
                        'url_educational_materials' => 'url_educational_materials',
                        'url_issuer_form_c' => 'url_issuer_form_c',
                        'status' => 'active',
                    ]; 
                    $this->RegCFRepository->storeRegCF($data);
                    

                }
                // Investor FLow  
                DB::commit();
                return redirect()->route('offers.active.index')->with('success','Offer has been created successfully');
            }
            
        }catch(Exception $error){
            dd($error);
            return redirect()->back()->with('error','Error while creating offer');
        }
    }

    public function update(Request $request)
    {
      
        
        $request->validate([
            'issuer' => 'required',
            'offer_name' => 'required',
            //'short_description' => 'required',
            //'security_type' => 'required',
           // 'symbol' => 'required',
            'size' => 'required',
            'offer_id' => 'required',
            'investment_restrication_id' => 'required',
            //'min_invesment'=>'required',
            //'max_invesment'=>'required'
        ]);
        $offer = Offer::find($request->offer_id);
        $offer->issuer_id = $request->issuer;
        $offer->name =  $request->offer_name;
        $offer->feature_video  = $request->feature_video_url;
        $offer->short_description =  $request->short_description;
        $offer->security_type =   $request->security_type;
        $offer->symbol =   $request->symbol;
        $offer->size =   $request->size;
        $offer->size_label = $request->size_label;
        $offer->base_currency =  $request->base_currency;
        $offer->price_per_unit =  $request->price_per_unit;
        $offer->share_unit_label = $request->share_unit_label;
        $offer->total_valuation =  $request->total_valuation;
        $offer->commencement_date =  $request->commencement_date;
        $offer->funding_end_date =    $request->funding_end_date;
        $offer->updated_at =    Carbon::now();
        $offer->save();
        if($offer->save()) {
            if($request->hasFile('offer_image')) {
                $offer->clearMediaCollection('offer_image');
                $offer->addMediaFromRequest('offer_image')->toMediaCollection('offer_image');
            }
            if($request->hasFile('banner_image')) {
                $offer->clearMediaCollection('banner_image');
                $offer->addMediaFromRequest('banner_image')->toMediaCollection('banner_image');
            }
            $invesment_restriction = InvestmentRestrication::find($request->investment_restrication_id);
            $invesment_restriction->min_invesment = $request->min_invesment;
            $invesment_restriction->max_invesment = $request->max_invesment;
            ($request->allow_fractional_shares == null ? $invesment_restriction->allow_fractional_shares =  false : $invesment_restriction->allow_fractional_shares =  true);
            ($request->require_investing_units == null ? $invesment_restriction->require_investing_units =  false : $invesment_restriction->require_investing_units =  true);
            $invesment_restriction->save();
            // Updating call to Action
            if($request->calltoaction_button_id != null){
                $update_call_to_action  =   CallToAction::find($request->calltoaction_button_id);
                $update_call_to_action->offer_id = $offer->id;
                $update_call_to_action->review_documents = $request->review_documents;
                $update_call_to_action->invest_button_text = $request->invest_button_text;
                $update_call_to_action->contact_us_button_text = $request->contact_us_button_text;
                ($request->send_notification_when_clicked == null ? $update_call_to_action->send_notification_when_clicked =  false : $update_call_to_action->send_notification_when_clicked =  true);
                ($request->hide_contact_button == null ? $update_call_to_action->hide_contact_button =  false : $update_call_to_action->hide_contact_button =  true);
                ($request->hide_contact_button == null ? $update_call_to_action->hide_contact_button =  false : $update_call_to_action->hide_contact_button =  true);
                ($request->use_calendly_meeting_scheduling == null ? $update_call_to_action->use_calendly_meeting_scheduling =  false : $update_call_to_action->use_calendly_meeting_scheduling =  true);
                $update_call_to_action->calendly_meeting_link = $request->calendly_meeting_link;
                $update_call_to_action->contact_us_external_url = $request->contact_us_external_url;
                $update_call_to_action->addt_contact_emails = $request->addt_contact_emails;
                $update_call_to_action->confirm_invesment_button_text = $request->confirm_invesment_button_text;
                $update_call_to_action->transaction_confirmation_message = $request->transaction_confirmation_message;
                $update_call_to_action->addtl_created_emails = $request->addtl_created_emails;
                $update_call_to_action->learn_more_button = $request->learn_more_button;
                $update_call_to_action->sign_in_button = $request->sign_in_button;
                $update_call_to_action->external_url = $request->external_url;
                $update_call_to_action->save();

            }
              // Updating Access
            if($request->access_id != null){
                $access  =  Access::find($request->access_id);
                $access->offer_id =  $offer->id;
                $access->offer_status = $request->offer_status;
                $access->visiblity = $request->visiblity;
                $access->allow_list = $request->allow_list;
                $access->deny_list = $request->deny_list;
                $access->max_number_non_accredited = $request->max_number_non_accredited;
                ($request->allow_referrals == null ? $access->allow_referrals =  false : $access->allow_referrals =  true);
                ($request->allow_non_accredited_investors == null ? $access->allow_non_accredited_investors =  false : $access->allow_non_accredited_investors =  true);
                ($request->allow_editing == null ? $access->allow_editing =  false : $access->allow_editing =  true);
                $access->save();
            }
            // Updating Display
            if($request->display_id != null){
                    $display  =  Display::find($request->display_id);
                    $display->offer_id = $offer->id;
                    ($request->enable_questions == null ? $display->enable_questions =  false : $display->enable_questions =  true);
                    ($request->funding_process == null ? $display->funding_process =  false : $display->funding_process =  true);
                    ($request->show_funding_end_countdown == null ? $display->show_funding_end_countdown =  false : $display->show_funding_end_countdown =  true);
                    ($request->show_blockchain_info == null ? $display->show_blockchain_info =  false : $display->show_blockchain_info =  true);
                    ($request->swap_issuer == null ? $display->swap_issuer =  false : $display->swap_issuer =  true);
                    ($request->hide_logo_container == null ? $display->hide_logo_container =  false : $display->hide_logo_container =  true);
                    ($request->hide_logo_details == null ? $display->hide_logo_details =  false : $display->hide_logo_details =  true);
                    ($request->hide_logo_marketplace == null ? $display->hide_logo_marketplace =  false : $display->hide_logo_marketplace =  true);
                    ($request->remove_hero_image_mask == null ? $display->remove_hero_image_mask =  false : $display->remove_hero_image_mask =  true);
                    ($request->hide_contact_us_from == null ? $display->hide_contact_us_from =  false : $display->hide_contact_us_from =  true);
                    $display->offer_tab_name = $request->offer_tab_name;
                    $display->video_tab_name = $request->video_tab_name;
                    $display->document_tab_name = $request->document_tab_name;
                    $display->update_tab_name = $request->update_tab_name;
                    $display->qa_tab_name = $request->qa_tab_name;
                    $display->save(); 
            }
            // Updating OfferContact
            if($request->contact_id != null){
                $offerContact = OfferContact::find($request->contact_id);
                $offerContact->offer_id = $offer->id;
                $offerContact->address = $request->offer_address;
                $offerContact->phone = $request->phone;
                $offerContact->contact_us = $request->contact_us;
                $offerContact->save();
            }
             // Updating Offer Detail Tab
            
            if($request->has('summary_title')){
               
                for($i=0;$i<count($request->summary_title);$i++){
                    $offer_detail_tab_summary = OfferDetailTab::find($request['summary_id'][$i]);
                    $offer_detail_tab_summary->offer_id = $offer->id;
                    $offer_detail_tab_summary->input = 'summary';
                    $offer_detail_tab_summary->heading = $request['summary_title'][$i];
                    $offer_detail_tab_summary->sub_heading = $request['summary_sub_title'][$i];
                    $offer_detail_tab_summary->description = $request['summary_sub_description'][$i];
                    $offer_detail_tab_summary->save();
                }
            }
            if($request->has('summary_title_new')){ 
               
                for($j=0;$j<count($request->summary_title_new);$j++){
                    $offer_detail_tab = new OfferDetailTab();
                    $offer_detail_tab->offer_id = $offer->id;
                    $offer_detail_tab->input = 'summary';
                    $offer_detail_tab->heading = $request['summary_title_new'][$j];
                    $offer_detail_tab->sub_heading = $request['summary_sub_title_new'][$j];
                    $offer_detail_tab->description = $request['summary_sub_description_new'][$j];
                    $offer_detail_tab->save();
               }
            } 
            if($request->has('text_heading')){
                for($k=0;$k<count($request->text_heading);$k++){ 
                    $offer_detail_tab_text = OfferDetailTab::find($request['text_id'][$k]);
                    $offer_detail_tab_text->offer_id = $offer->id; 
                    $offer_detail_tab_text->input = 'text';
                    $offer_detail_tab_text->heading = $request['text_heading'][$k];
                    $offer_detail_tab_text->sub_heading = $request['text_sub_heading'][$k];
                    $offer_detail_tab_text->description = $request['text_description'][$k];
                    $offer_detail_tab_text->save();
                }
            } 
            if($request->has('text_title_new')){
              
                for($k=0;$k<count($request->text_title_new);$k++){ 
                    $offer_detail_tab_text = new OfferDetailTab();
                    $offer_detail_tab_text->offer_id = $offer->id; 
                    $offer_detail_tab_text->input = 'text';
                    $offer_detail_tab_text->heading =   isset($request['text_title_new'][$k]) ? $request['text_title_new'][$k] : null;
                    $offer_detail_tab_text->sub_heading =   isset($request['text_sub_heading_new'][$k]) ? $request['text_sub_heading_new'][$k] : null;
                    $offer_detail_tab_text->description =   isset($request['text_description_new'][$k]) ? $request['text_description_new'][$k] : null;
                    $offer_detail_tab_text->save(); 
                }
            }
            if($request->has('tiles_source')){
              
                $offer_detail_tab = OfferDetailTab::find($request['offer_detail_id_for_tiles']); 
                $offer_detail_tab->input = 'tiles';
                $offer_detail_tab->save(); 

                foreach ($request->file('tiles_source') as $mediaId => $file) {
                    if ($file) { 
                        // If a new file was uploaded, replace the media item
                        $mediaItem = $offer_detail_tab->getMedia('offer_tiles')->where('id', $mediaId)->first(); 
                        $mediaItem->delete(); // delete the old media
                        $offer_detail_tab->addMedia($file)->toMediaCollection('offer_tiles');
                    }
                }
                 
               
            }
            if($request->has('tiles_source_new')){
               
                $offer_detail_tab = OfferDetailTab::find($request['offer_detail_id_for_tiles']); 
                $offer_detail_tab->offer_id = $offer->id; 
                $offer_detail_tab->input = 'tiles';
                $offer_detail_tab->save();  
                $offer_detail_tab->addMultipleMediaFromRequest(['tiles_source_new'])
                ->each(function ($fileAdder) use ($offer_detail_tab) {
                    $fileAdder->toMediaCollection('offer_tiles', 'public');
                });   
               
            }
            if($request->hasFile('photo_old')) { 
                foreach ($request->file('photo_old') as $mediaId => $file) {
                    if ($file) { 
                        // If a new file was uploaded, replace the media item
                        $mediaItem = $offer->getMedia('offer_detail_images')->where('id', $mediaId)->first(); 
                        $mediaItem->delete(); // delete the old media
                        $offer->addMedia($file)->toMediaCollection('offer_detail_images');
                    }
                }
            }
            if($request->hasFile('image_new')) { 
                $offer->addMultipleMediaFromRequest(['image_new'])
                ->each(function ($fileAdder) {
                    $fileAdder->toMediaCollection('offer_detail_images');
                });
            }
            if($request->has('src_new')){
                for($i=0;$i<count($request->src_new);$i++){
                     $offer_videos = new OfferVideos();
                     $offer_videos->offer_id = $offer->id;
                     $offer_videos->source = $request['src_new'][$i];
                     $offer_videos->url = $request['url_new'][$i];
                     $offer_videos->description = $request['description_new'][$i];
                     $offer_videos->visible = $request['access_new'][$i];
                     $offer_videos->save(); 
                }
             }
            
            
             

        }
       
        return redirect()->route('offers.active.index')->with('success','Offer has been created successfully');
 
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]); 
        try{
            $offer = Offer::find($request->id);
            if($offer->delete()) {
                return response([
                    'status'=>true,
                    'message'=> 'Offer has been deleted successfully'
                ]);
            }
        }catch(Exception $error){
            return response([
                'status'=>false,
                'message'=> 'Error while deleting Offer'
            ]);
        }

    }

    public function deleteTile(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);  
        try{
            $delete = DB::table('media')->where('id',$request->id)->delete();
            return response([
                'status'=>true,
                'message'=> 'Media file has been deleted successfully'
            ]);
        }catch(Exception $error){
            return response([
                'status'=>false,
                'message'=> 'Error while deleting file'
            ]);
        }

    }

    public function deleteVideo(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);  
        try{
            $video = OfferVideos::find($request->id);
            $video->delete();
            return response([
                'status'=>true,
                'message'=> 'Video has been deleted successfully'
            ]);
        }catch(Exception $error){
            return response([
                'status'=>false,
                'message'=> 'Error while deleting Video'
            ]);
        }

    }

    
    public function view($id)
    {
        $offer = Offer::with('user')->find($id); 
        $issuers = User::role('issuer')->get();
        return view('offers.view',compact('offer','issuers'));
    }

    public function checkCustodial(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        $user = User::find($request->id);
        if($user->check_kyc == true){
            $kyc = KYC::where('user_id',$request->id)->first(); 
            if($kyc){
                $check_level = $kyc->kyc_level;
                if($check_level == 'L0'){
                    return response([
                        'status'=>false,
                        'message'=>'KYC Status Must Be Greater Then LO'
                    ]);
                }
            }else{
                return response([
                    'status'=>false,
                    'message'=>'Issuer KYC not yet completed'
                ]);
            }
        }else{
            return response([
                'status'=>true
            ]);
        }
       
    }

    public function policy(){
        return view('offers.policy');
    }

    public function policyCreate(Request $request){
        
        $request->validate([
            'content' => 'required',
        ]);
        
    }

    public function policyDelete(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        dd(1);
    }

}
