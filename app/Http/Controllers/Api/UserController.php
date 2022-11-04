<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\InvestorResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\UserDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function login(Request $request)
    {
        // $login =  $request->validate([
        //     'email' => 'required|string',
        //     'password' => 'required|string'
        // ]);
            
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
             $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }else{
            return response()->json([
                'status' => true,
                'status_code' => 200,
                'message' => "No user found with given username or email",
            ], 404);
        }
    }
    public function investors()
    {
            $users = User::role('investor')->with('userDetail')->get();
            return response([
                'status' => true,
                'status_code' => 200,
                'data' => InvestorResource::collection($users)
            ]);
    }
    public function investor_create(Request $request)
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
            return response([
                'status' => true,
                'status_code' => 200,
                'data' => InvestorResource::make($user)
            ]);
        }catch(Exception $error){
            DB::rollBack();
            return response([
                'status' => $error
            ]);
        }       
    }
}
