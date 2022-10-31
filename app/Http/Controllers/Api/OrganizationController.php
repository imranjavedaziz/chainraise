<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OffersByIssuerResource;
use App\Http\Resources\OrganizationResource;
use App\Http\Resources\OrganizationWithOfferResource;
use App\Models\Offer;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations  =  User::role('issuer')->get();
        return [
            'status' => true,
            'data' => OrganizationResource::collection($organizations)
        ];
    }
    public function singleOrganization($id)
    {
        $organization  =  Organization::find($id);
        return [
            'status' => true,
            'data' => OrganizationResource::make($organization)
        ];
    }

    public function OrganizationOffers($id)
    {
            $offers  =  Offer::where('issuer_id',$id)->get();
            return [
                'status' => true,
                'data' => OffersByIssuerResource::make($offers)
            ];
    }

    
}
