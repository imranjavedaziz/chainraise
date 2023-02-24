<?php

namespace App\Http\Controllers\Engagment;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class EngagmentController extends Controller
{
    public function index(){
        $offers = Offer::get();
        return view('engagment.index',compact('offers'));
    }
}
