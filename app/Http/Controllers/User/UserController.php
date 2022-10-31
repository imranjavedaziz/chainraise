<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\IdentityVerification;
use App\Models\TrustSetting;
use App\Models\User;
use App\Models\UserDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with('userDetail')->orderby('id','DESC')->get();
        return view('user.index',compact('users'));
    }
    public function details($id)
    {
        $user = User::with('userDetail','identityVerification','trustSetting')->find($id);
        return view('user.details',compact('user'));
    }

    public function list()
    {
        $users = User::get();
        return response([
            'users' => $users,
        ]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        try {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =  Hash::make($request->password);
            $user->status = 'active';

            if ($user->save()) {
                return redirect()->back()->with('success', 'User has been created successfully');
            }
        } catch (Exception $error) {
            return redirect()->back()->with('error', 'Error while creating user');
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        try {
            $user = User::find($request->id);
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->password) {
                $user->password =  Hash::make($request->password);
            }
            $user->status = $request->status;
            if ($user->save()) {
                return redirect()->back()->with('success', 'User has been updated successfully');
            }
        } catch (Exception $error) {
            return redirect()->back()->with('error', 'Error while updating user');
        }
    }


    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        try {
            $user = User::find($request->id);
            if ($user->delete()) {
                return response([
                    'status' => true,
                    'message' => 'User has been deleted successfully'
                ]);
            }
        } catch (Exception $error) {
            return response([
                'status' => false,
                'message' => 'Error while deleting user'
            ]);
        }
    }



    public function investor()
    {
        return view('user.investor.create');
    }

    public function save(Request $request)
    {
         
        $request->validate([
            'email' => 'required',
            'first_name' => 'required',
           // 'middle_name' => 'required',
            'last_name' => 'required',
            //'title' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            //'profile_avatar' => 'required',
            'address' => 'required',
            //'suit' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required', 
            'account_type' => 'required|in:investor,issuer',
            //'agree_consent_electronic' => 'required',
            //'password' => 'required',
        ]);
        
        if($request->agree_consent_electronic  == 'true'){
            $agree_consent_electronic = true;
        }else{
            $agree_consent_electronic =false;
        }
      
        DB::beginTransaction();
        try{
            $user = new User;
            $user->name  = $request->first_name;
            $user->email  = $request->email;
            if($request->has('password') && $request->password != null){
                $user->password  =  Hash::make($request->password);
            }
            $user->phone  = $request->phone;
            $user->status  = 'active';
            $user->save();
            if($request->hasFile('photo')) {
                $user->addMediaFromRequest('photo')->toMediaCollection('profile_photo');
            }
            $user_detail = new UserDetail;
            $user_detail->user_id = $user->id;
            $user_detail->middle_name = $request->middle_name;
            $user_detail->last_name = $request->last_name;
            $user_detail->title = $request->title;
            $user_detail->dob = $request->dob;
            $user_detail->address = $request->address;
            $user_detail->suit = $request->suit;
            $user_detail->city = $request->city;
            $user_detail->state = $request->state;
            $user->agree_consent_electronic  = $agree_consent_electronic;   
            $user_detail->zip = $request->zip_code;
            // -- This Detail is for issuer
            $user_detail->entity_name = $request->entity_name;
            $user_detail->legal_formation = $request->legal_formation;
            $user_detail->date_incorporation = $request->date_incorporation;
            // -- End Issuer detail
            $user_detail->save();
            if($request->account_type == 'investor'){
                $user->assignRole('investor');
            }elseif($request->account_type == 'issuer') {
                $user->assignRole('issuer');
            }
            
            DB::commit();
            return redirect()->route('user.index')->with('success','New investor user has been created');
        }catch(Exception $error){
            return $error;
            DB::rollBack();

            return redirect()->back()->with('error','Error while creating investor user');
        }       
    }

    public function issuer()
    {
        return view('user.issuer.create');
    }
    public function issuerSave(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'first_name' => 'required',
           // 'middle_name' => 'required',
            'last_name' => 'required',
            //'title' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            //'profile_avatar' => 'required',
            'address' => 'required',
            //'suit' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'agree_consent_electronic' => 'required',
            //'password' => 'required',
        ]);

   
      
        DB::beginTransaction();
        try{
            $user = new User;
            $user->name  = $request->first_name;
            $user->email  = $request->email;
            $user->password  =  Hash::make($request->password);
            $user->phone  = $request->phone;
            $user->agree_consent_electronic  = $request->agree_consent_electronic;
            $user->status  = 'active';
            $user->save();
            $user_detail = new UserDetail;
            $user_detail->user_id = $user->id;
            $user_detail->middle_name = $request->middle_name;
            $user_detail->last_name = $request->last_name;
            $user_detail->title = $request->title;
            $user_detail->dob = $request->dob;
            $user_detail->address = $request->address;
            $user_detail->suit = $request->suit;
            $user_detail->city = $request->city;
            $user_detail->state = $request->state;
            $user_detail->zip = $request->zip_code;
            $user_detail->save();
            DB::commit();
            return redirect()->route('user.index')->with('success','New investor user has been created');
        }catch(Exception $error){
            DB::rollBack();
            return redirect()->back()->with('error','Error while creating investor user');
        }       
    }

    public function accountUpdate(Request $request)
    {

       
        $request->validate([
            //Users Table
            'id' => 'required',
            'first_name' => 'required',
            'phone' => 'required',
            //'agree_consent_electronic' => 'required',

            // User Detail
           // 'middle_name' => 'required',
           // 'last_name' => 'required',
           // 'title' => 'required',
            'dob' => 'required',
            //'profile_avatar' => 'required',
            'address' => 'required',
            //'suit' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',

            // Identity Verifiation
           // 'social_security' => 'required',
            'nationality' => 'required',
            'country_residence' => 'required',

            //Trust Settings
            //'bypass_account_setup' => 'required',
            //'bypass_kyc_checkup' => 'required',
            //'bypass_accreditation_checks' => 'required',
            //'bypass_document_restrictions' => 'required',
           // 'view_all_invite_offers' => 'required',
            //'allow_manual_ach_bank_input' => 'required',

        ]);

        $user = User::find($request->id);
        $user->name = $request->first_name;
        $user->phone = $request->phone;
        if($request->agree_consent_electronic){
            $user->agree_consent_electronic = true;
        }else{
            $user->agree_consent_electronic = false;
        }
        $user->save();
        $userDetails = UserDetail::where('user_id',$request->id)->first();
        $userDetails->middle_name = $request->middle_name;
        $userDetails->last_name = $request->last_name;
        $userDetails->title = $request->title;
        $userDetails->dob = $request->dob;
        if($request->has('profile_avatar')){
            $user->clearMediaCollection('profile_photo');
            $user->addMediaFromRequest('profile_avatar')->toMediaCollection('profile_photo');
        }
        $userDetails->address = $request->address;
        $userDetails->suit = $request->suit;
        $userDetails->state = $request->state;
        $userDetails->zip = $request->zip;
        $userDetails->save();

        $trustSetting = TrustSetting::where('user_id',$request->id)->first();
        if($trustSetting){
                

            if($request->bypass_account_setup){
                $trustSetting->bypass_account_setup = true;
            }else{
                $trustSetting->bypass_account_setup = false;
            }
            if($request->bypass_kyc_checkup){
                $trustSetting->bypass_kyc_checkup = true;
            }else{
                $trustSetting->bypass_kyc_checkup = false;
            }
            if($request->bypass_accreditation_checks){
                $trustSetting->bypass_accreditation_checks = true;
            }else{
                $trustSetting->bypass_accreditation_checks = false;
            }
            if($request->bypass_document_restrictions){
                $trustSetting->bypass_document_restrictions = true;
            }else{
                $trustSetting->bypass_document_restrictions = false;
            }
            if($request->view_all_invite_offers){
                $trustSetting->view_all_invite_offers = true;
            }else{
                $trustSetting->view_all_invite_offers = false;
            }

            if($request->allow_manual_ach_bank_input){
                $trustSetting->allow_manual_ach_bank_input = true;
            }else{
                $trustSetting->allow_manual_ach_bank_input = false;
            }
            $trustSetting->save();

        }else{
            $trustSetting = new TrustSetting;
            $trustSetting->user_id = $request->id;
            if($request->bypass_account_setup){
                $trustSetting->bypass_account_setup = true;
            }else{
                $trustSetting->bypass_account_setup = false;
            }
            if($request->bypass_kyc_checkup){
                $trustSetting->bypass_kyc_checkup = true;
            }else{
                $trustSetting->bypass_kyc_checkup = false;
            }
            if($request->bypass_accreditation_checks){
                $trustSetting->bypass_accreditation_checks = true;
            }else{
                $trustSetting->bypass_accreditation_checks = false;
            }
            if($request->bypass_document_restrictions){
                $trustSetting->bypass_document_restrictions = true;
            }else{
                $trustSetting->bypass_document_restrictions = false;
            }
            if($request->view_all_invite_offers){
                $trustSetting->view_all_invite_offers = true;
            }else{
                $trustSetting->view_all_invite_offers = false;
            }

            if($request->allow_manual_ach_bank_input){
                $trustSetting->allow_manual_ach_bank_input = true;
            }else{
                $trustSetting->allow_manual_ach_bank_input = false;
            }

        }
        $trustSetting->save();
        $identityVerifications = IdentityVerification::where('user_id',$request->id)->first();
        if($identityVerifications){
            $identityVerifications->social_security = $request->social_security;
            $identityVerifications->nationality = $request->nationality;
            $identityVerifications->country_residence = $request->country_residence;
        }else{
            $identityVerifications = new IdentityVerification;
            $identityVerifications->user_id = $request->id;
            $identityVerifications->social_security = $request->social_security;
            $identityVerifications->nationality = $request->nationality;
            $identityVerifications->country_residence = $request->country_residence;
        }
        $identityVerifications->save();
        return redirect()->back()->with('success','Profile has been updated');

    }
}
