<?php

namespace App\Http\Controllers\Offers;

use App\Http\Controllers\Controller;
use App\Models\Offer;
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
        $organizations = Organization::where('status','active')->get();
        return view('offers.index',compact('issuers','offers','organizations'));
    }

    public function edit($id)
    {
            
         $offer = Offer::find($id);
         //$organizations = Organization::get();
         $issuers = User::role('issuer')->get();
        return view('offers.edit',compact('offer','issuers'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'issuer' => 'required',
            'min_investment' => 'required',
            'goal' => 'required',
            'pledged' => 'required',
            'max_raise' => 'required',
            'industry' => 'required',
            'disclosure' => 'required',
            'type' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        
        try{
            $Offer = new Offer;
            $Offer->issuer_id =  $request->issuer;
            $Offer->name =              $request->name;
            $Offer->slug =              $request->slug;
            $Offer->min_investment =              $request->min_investment;
            $Offer->goal =              $request->goal;
            $Offer->pledged =              $request->pledged;
            $Offer->max_raise =              $request->max_raise;
            $Offer->price_per_unit =              $request->price_per_unit;
            $Offer->industry =              $request->industry;
            $Offer->disclosure =              $request->disclosure;
            $Offer->type =              $request->type;
            $Offer->start_time =              $request->start_time;
            $Offer->end_time =              $request->end_time;
            $Offer->summary =              $request->summary;
            $Offer->short_description =              $request->short_description;
            $Offer->description =              $request->description;
            $Offer->status =              'active' ;
            if($Offer->save()) {
                if($request->hasFile('logo')) {
                    $Offer->addMediaFromRequest('logo')->toMediaCollection('logo');

                }
                if($request->hasFile('banner')) {
                    $Offer->addMediaFromRequest('banner')->toMediaCollection('banner');
                   
                }
                return redirect()->back()->with('success','Organization has been created successfully');
            }

        }catch(Exception $error){
            return $error;
            return redirect()->back()->with('error','Error while creating Organization');
        }
    }
    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        //
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
        $request->validate([
            'name' => 'required',
            'id' => 'required',
            'issuer' => 'required',
            'min_investment' => 'required',
            'goal' => 'required',
            'pledged' => 'required',
            'max_raise' => 'required',
            'industry' => 'required',
            'disclosure' => 'required',
            'type' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        
        try{
            $Offer = Offer::find($request->id);
          
            $Offer->issuer_id =  $request->issuer;
            $Offer->name =              $request->name;
            $Offer->slug =              $request->slug;
            $Offer->min_investment =              $request->min_investment;
            $Offer->goal =              $request->goal;
            $Offer->pledged =              $request->pledged;
            $Offer->max_raise =              $request->max_raise;
            $Offer->price_per_unit =              $request->price_per_unit;
            $Offer->industry =              $request->industry;
            $Offer->disclosure =              $request->disclosure;
            $Offer->type =              $request->type;
            $Offer->start_time =              $request->start_time;
            $Offer->end_time =              $request->end_time;
            $Offer->summary =              $request->summary;
            $Offer->short_description =              $request->short_description;
            $Offer->description =              $request->description;
            $Offer->status =              'active' ;
            if($Offer->save()) {
                if($request->hasFile('logo')) {
                    $Offer->clearMediaCollection('logo');
                    $Offer->addMediaFromRequest('logo')->toMediaCollection('logo');

                }
                if($request->hasFile('banner')) {
                    $Offer->clearMediaCollection('banner');
                    $Offer->addMediaFromRequest('banner')->toMediaCollection('banner');
                }
                return redirect()->back()->with('success','Organization has been updated successfully');
            }

        }catch(Exception $error){
            return $error;
            return redirect()->back()->with('error','Error while updating Organization');
        }
    }

}
