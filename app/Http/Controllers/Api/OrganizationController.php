<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrganizationResource;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations  =  Organization::get();
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
}
