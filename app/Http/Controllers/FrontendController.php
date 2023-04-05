<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Models\Accreditation;
class FrontendController extends Controller
{
    public function index()
    {   
       
        $offers = Offer::get();
        return view('frontEnd.offer.index',compact('offers'));
    }

    public function detail($slug)
    {   
       
        $offer = Offer::with('user','user.userDetail','investmentRestrictions','offerDetail')->where('slug',$slug)->first();
        return view('frontEnd.offer.detail',compact('offer'));
    }

    public function socialLogin()
    {
       
        return view('frontEnd.login');
    }

    function privacy_policy(){
       
        return view('frontEnd.privacy_policy');
    }

    function terms(){
       
        return view('frontEnd.terms');
    }

    function faq(){ 
        return view('frontEnd.faq');
    }

    function contact(){ 
        return view('frontEnd.contact');
    }


    function investors(){ 
        return view('frontEnd.investors');
    }
    function businesses(){ 
        return view('frontEnd.businesses');
    }

    
    
}
