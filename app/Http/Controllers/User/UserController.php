<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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
          $users = User::with('userDetail')->get();
        return view('user.index',compact('users'));
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
    
}
