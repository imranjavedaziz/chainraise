<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('user.index',compact('users'));
    }

     public function list()
    {
       $users = User::get();
       return response([
            'users'=>$users,
       ]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('user.profile',compact('user'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);
        
        try{
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password =  Hash::make($request->password);
            $user->status = 'active';
            
            if($user->save()) {
                return redirect()->back()->with('success','User has been created successfully');
            }
        }catch(Exception $error){
            return redirect()->back()->with('error','Error while creating user');
        }
        

    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        try{
            $user = User::find($request->id);
            $user->name = $request->name;
            $user->email = $request->email;
            if($request->password){
                $user->password =  Hash::make($request->password);
            }
            $user->status = $request->status;
            if($user->save()) {
                return redirect()->back()->with('success','User has been updated successfully');
            }
        }catch(Exception $error){
            return redirect()->back()->with('error','Error while updating user');
        }
        

    }


    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        try{
            $user = User::find($request->id);
            if($user->delete()) {
                return response([
                    'status'=>true,
                    'message'=> 'User has been deleted successfully'
                ]);
            }
        }catch(Exception $error){
            return response([
                'status'=>false,
                'message'=> 'Error while deleting user'
            ]);
        }
        

    }


    
}
