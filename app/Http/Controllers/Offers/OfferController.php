<?php

namespace App\Http\Controllers\Offers;

use App\Http\Controllers\Controller;
use App\Models\Access;
use App\Models\CallToAction;
use App\Models\InvestmentRestrication;
use App\Models\Offer;
use App\Models\OfferContact;
use App\Models\OfferDetailTab;
use App\Models\OfferTiles;
use App\Models\OfferVideos;
use App\Models\Organization;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $issuers = User::role('issuer')->get();
        $offers = Offer::get();
       
        return view('offers.index',compact('issuers','offers'));
    }

    public function edit($id)
    {
            
          $offer = Offer::with('user','investmentRestrictions','callToAction','offerDetail','offerDetail.offerTiles','offerVideos')->find($id);
         //$organizations = Organization::get();
         $issuers = User::role('issuer')->get();
         return view('offers.edit',compact('offer','issuers'));
    }

    public function create()
    {
        $issuers = User::role('issuer')->get(); 
        return view('offers.create',compact('issuers'));
    }

    public function save(Request $request)
    {
       
        $request->validate([
            'issuer' => 'required',
            'offer_name' => 'required',
            'short_description' => 'required',
            'security_type' => 'required',
            'symbol' => 'required',
            'size' => 'required',
            'size_label' => 'required',
            'base_currency' => 'required',
            'price_per_unit' => 'required',
            'share_unit_label' => 'required',
            'total_valuation' => 'required',
            'commencement_date' => 'required',
            'funding_end_date' => 'required',
        ]);
        
        try{
            $Offer = new Offer;
            $Offer->issuer_id =  $request->issuer;
            $Offer->name =              $request->offer_name;
            $Offer->short_description =              $request->short_description;
            $Offer->security_type =              $request->security_type;
            $Offer->symbol =              $request->symbol;
            $Offer->size =              $request->size;
            $Offer->size_label =              $request->size_label;
            $Offer->base_currency =              $request->base_currency;
            $Offer->price_per_unit =              $request->price_per_unit;
            //$Offer->share_unit_label =              $request->share_unit_label;
            $Offer->total_valuation =              $request->total_valuation;
            $Offer->commencement_date =              $request->commencement_date;
            $Offer->funding_end_date =              $request->funding_end_date;
            $Offer->status =              'active' ;
            if($Offer->save()) {
                
                if($request->hasFile('offer_image')) {
                    $Offer->addMediaFromRequest('offer_image')->toMediaCollection('offer_image');
                }
                if($request->hasFile('banner_image')) {
                    $Offer->addMediaFromRequest('banner_image')->toMediaCollection('banner_image');
                }

                $invesment_restriction = new InvestmentRestrication;
                $invesment_restriction->min_invesment = $request->min_invesment;
                $invesment_restriction->max_invesment = $request->max_invesment;
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
                $invesment_restriction->offer_id = $Offer->id;
                if($invesment_restriction->save()){
                    $call_to_action  = new CallToAction;
                    $call_to_action->offer_id = $Offer->id;
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
                        $access->offer_id =  $Offer->id;
                      
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
                          
                               $offerContact = new OfferContact;
                               $offerContact->offer_id = $Offer->id;
                               $offerContact->address = $request->address;
                               $offerContact->phone = $request->phone; 
                               $offerContact->contact_us = $request->contact_us; 
                               if($offerContact->save()){

                               }
                          
                        }

                    }
                    
                    if($request->has('src')){
                       for($i=0;$i<count($request->src);$i++){
                            $offer_videos = new OfferVideos();
                            $offer_videos->offer_id = $Offer->id;
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
                            $offer_detail_tab->offer_id = $Offer->id;
                            $offer_detail_tab->input = 'summary';
                            $offer_detail_tab->heading = $request['summary_title'][$j];
                            $offer_detail_tab->sub_heading = $request['summary_sub_title'][$j];
                            $offer_detail_tab->description = $request['summary_sub_description'][$j];
                            $offer_detail_tab->save();
                       }
                    }
                   
                    if($request->has('tiles_source')){
                            $offer_detail_tab = new OfferDetailTab();
                            $offer_detail_tab->offer_id = $Offer->id;
                            $offer_detail_tab->heading = '';
                            $offer_detail_tab->sub_heading = '';
                            $offer_detail_tab->description = '';
                            $offer_detail_tab->input = 'tiles';
                            $offer_detail_tab->save();

                            foreach ($request->tiles_source as $index => $ItemName) {
                                $offer_tiles = new OfferTiles();
                                $offer_tiles->offer_detail_tabs_id = $offer_detail_tab->id;
                                $offer_tiles->status = 'active';
                                $image = $request->file('tiles_source')[$index];
                                $filenameWithExt = $image->getClientOriginalName ();
                                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                                $extension =$image->getClientOriginalExtension();
                                $tilePhoto = 'tiles_'.time().'.'.$extension;
                                $path = $image->storeAs("tiles", $tilePhoto);
                                $offer_tiles->path = $path;
                                $offer_tiles->priority = 2; 
                                $offer_tiles->save();
                            }
                    }

                    if($request->has('text_title')){
                        for($l=0;$l<count($request->text_title);$l++){
                            $offer_detail_tab = new OfferDetailTab();
                            $offer_detail_tab->offer_id = $Offer->id;
                            $offer_detail_tab->input = 'text';
                            $offer_detail_tab->heading = $request['text_title'][$l];
                            $offer_detail_tab->sub_heading = $request['text_sub_title'][$l];
                            $offer_detail_tab->description = $request['text_description'][$l];
                            $offer_detail_tab->save();
                       }
                    }
                    // if($request->has('image')){
                    //     for($m=0;$m<count($request->text_title);$m++){
                    //         dd(1);
                    //     }
                    // }

                    
                }
                 

                return redirect()->route('offers.index')->with('success','Offer has been created successfully');
            }

        }catch(Exception $error){
            return $error;
            return redirect()->back()->with('error','Error while creating offer');
        }
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
    public function update(Request $request)
    {
         
        dd(1);
        $request->validate([
            'id'=>'required',
            'issuer' => 'required',
            'offer_name' => 'required',
            'short_description' => 'required',
            'security_type' => 'required',
            'symbol' => 'required',
            'size' => 'required',
            'size_label' => 'required',
            'base_currency' => 'required',
            'price_per_unit' => 'required',
            //'share_unit_label' => 'required',
            'total_valuation' => 'required',
            'commencement_date' => 'required',
            'funding_end_date' => 'required',
        ]);
         
        try{
            $offer = Offer::find($request->id);
            $offer->issuer_id =  $request->issuer;
            $offer->name =              $request->offer_name;
            $offer->short_description =              $request->short_description;
            $offer->security_type =              $request->security_type;
            $offer->symbol =              $request->symbol;
            $offer->size =              $request->size;
            $offer->size_label =              $request->size_label;
            $offer->base_currency =              $request->base_currency;
            $offer->price_per_unit =              $request->price_per_unit;
            //$offer->share_unit_label =              $request->share_unit_label;
            $offer->total_valuation =              $request->total_valuation;
            $offer->commencement_date =              $request->commencement_date;
            $offer->funding_end_date =              $request->funding_end_date;
            if($offer->save()) {
                
               
                if($request->hasFile('offer_image')) {
                    $offer->clearMediaCollection('offer_image');
                    $offer->addMediaFromRequest('offer_image')->toMediaCollection('offer_image');
                }
                if($request->hasFile('banner_image')) {
                    $offer->clearMediaCollection('banner_image');
                    $offer->addMediaFromRequest('banner_image')->toMediaCollection('banner_image');
                }
              
              
                return redirect()->back()->with('success','Organization has been updated successfully');
            }

        }catch(Exception $error){
            return $error;
            return redirect()->back()->with('error','Error while updating Organization');
        }
    }

    public function view($id)
    {
        $offer = Offer::with('user')->find($id); 
        $issuers = User::role('issuer')->get();
        return view('offers.view',compact('offer','issuers'));
    }

}
