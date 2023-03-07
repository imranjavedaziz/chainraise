<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

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
}
