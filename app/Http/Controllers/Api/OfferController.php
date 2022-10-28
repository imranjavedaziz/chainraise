<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OfferingResource;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offerings  =  Offer::get();
        return [
            'status' => true,
            'data' => OfferingResource::collection($offerings)
        ];
    }
    public function singleOffer($id)
    {
        $offer  =  Offer::find($id);
        return [
            'status' => true,
            'data' => OfferingResource::make($offer)
        ];
    }
}
