<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
         $offers = Offer::get();
       return view('dashboard',compact('offers'));
    }
}
