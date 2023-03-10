<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Models\Accreditation;
class FrontendController extends Controller
{
    public function index()
    {   
        $accreditations = Accreditation::get();
        $offers = Offer::get();
        return view('frontEnd.offer.index',compact('offers','accreditations'));
    }

    public function detail($slug)
    {   
        $accreditations = Accreditation::get();
        $offer = Offer::with('user','user.userDetail','investmentRestrictions','offerDetail')->where('slug',$slug)->first();
        return view('frontEnd.offer.detail',compact('offer','accreditations'));
    }

    public function socialLogin()
    {
        $accreditations = Accreditation::get();
        return view('frontEnd.login',compact('accreditations'));
    }

    function terms(){
        $accreditations = Accreditation::get();
        return view('frontEnd.terms',compact('accreditations'));
    }
}
