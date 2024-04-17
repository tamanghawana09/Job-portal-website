<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class GoogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(){
        try{
            $googleUser = Socialite::driver('google')->user();

            // $user = User::where('google_id',$user->getId)->first();

            // if(!$user){
            //     $new_user = User::create([
            //         'email' => $user->getEmail(),
            //         'username'=> $user->getName(),
            //         'google_id' => $user->getId()
            //     ]);
            //     $new_user->save();
            //     Log::info('New user created with Google ID: ' . $new_user->google_id);
            //     Auth::login($new_user);
            // }else{
            //     Auth::login($user);
            //     return redirect()->route('user-dashboard');
            // }

            $user = User::updateOrCreate([
                'google_id' =>$googleUser->id,
            ],[
                'username' => $googleUser->name,
                'email' =>$googleUser->email,
                'password'=>bcrypt($googleUser->password),
                'google_id'=>$googleUser->getId()
            ]);

            Auth::login($user);
            return redirect()->route('admin-dashboard');
        }catch(\Exception $e){
            Log::error('Google authentication error: ' . $e->getMessage());
            return redirect()->route('login')->with('error', 'An error occurred during Google authentication.');
        }
    }
}
