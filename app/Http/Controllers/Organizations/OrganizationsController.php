<?php

namespace App\Http\Controllers\Organizations;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Exception;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index()
    {
        $organizations = Organization::get();
        return view('organizations.index',compact('organizations'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:organizations',
            'category' => 'required',
            'status' => 'required',
        ]);
        
        try{
            $organization = new Organization;
            $organization->name = $request->name;
            $organization->category = $request->category;
            $organization->status = $request->status;
            if($organization->save()) {
                return redirect()->back()->with('success','Organization has been created successfully');
            }
        }catch(Exception $error){
            return redirect()->back()->with('error','Error while creating Organization');
        }
    }
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        try{
            $organization = Organization::find($request->id);
            $organization->name = $request->name;
            $organization->category = $request->category;
            $organization->status = $request->status;
            if($organization->save()) {
                return redirect()->back()->with('success','Organization has been updated successfully');
            }
        }catch(Exception $error){
            return redirect()->back()->with('error','Error while updating Organization');
        }
        

    }


    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        try{
            $organization = Organization::find($request->id);
            if($organization->delete()) {
                return response([
                    'status'=>true,
                    'message'=> 'Organization has been deleted successfully'
                ]);
            }
        }catch(Exception $error){
            return response([
                'status'=>false,
                'message'=> 'Error while deleting Organization'
            ]);
        }
        

    }
}
