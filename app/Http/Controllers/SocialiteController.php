<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
class SocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    // Google callback
    public function handleGoogleCallback(Request $request)
    {
        $code = $request->get('code');
        if($code == null){
            return redirect()->route('login.social');
        }else{
            $google_data = Socialite::driver('google')->user();
            $user = User::where('email', '=', $google_data->email)->first();
            if (!$user) {
                $user = new User();
                $user->name = $google_data->name;
                $user->email = $google_data->email;
                $user->email_verified_at = Carbon::now();
                $user->password  =  Hash::make('Google@123');
                $user->phone = '0000-000-00';
                $user->agree_consent_electronic = false;
                $user->status = 'active';
                $user->is_primary = 'yes';
                $user->social_id = $google_data->id;
                $user->social_type = 'google';
                $user->save();
                $user->addMediaFromUrl($google_data->avatar)->toMediaCollection('profile_photo');
                $user->assignRole('investor');
            }
            Auth::login($user);
            //event(new Registered($user));
            return redirect()->route('dashboard');
        }

    }


    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    // Google callback
    public function handleFacebookCallback(Request $request)
    {
        //
        $code = $request->get('code');
        if($code == null){
            return redirect()->route('login.social');
        }else{
            $faceBook = Socialite::driver('facebook')->user();
            $user = User::where('email', '=', $faceBook->email)->first();
            if (!$user) {
                $user = new User();
                $user->name = $faceBook->name;
                $user->email = $faceBook->email;
                $user->email_verified_at = Carbon::now();
                $user->password  =  Hash::make('Google@123');
                $user->phone = '0000-000-00';
                $user->agree_consent_electronic = false;
                $user->status = 'active';
                $user->is_primary = 'yes';
                $user->social_id = $faceBook->id;
                $user->social_type = 'google';
                $user->save();
                $user->addMediaFromUrl($faceBook->avatar)->toMediaCollection('profile_photo');
                $user->assignRole('investor');
            }
            Auth::login($user);
         event(new Registered($user));
            return redirect()->route('dashboard');
        }

    }

}
