<?php

namespace App\Http\Controllers\Investor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function dashbaord()
    {
        return view('frontEnd.offer.index');
    }
}
