<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function userLogin(){
        return view('userLogin');
    }

    public function userDashboard(){
        return view('User-UI.dashboarduser');
    }

    public function userSignup(Request $req){
        $req->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required',
        ]);
        $role_id =0;
        $user = User::create ([
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'username' => $req->username,
            'role_id' => $role_id,
        ]);
        Auth::login($user);
        return redirect()->route('user-login');
    }

    public function userSignin(Request $req){
        $req->validate([
            'email' =>['required', 'email'],
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' =>$req->email, 'password' => $req->password])){
            return redirect()->route('user-dashboard');
        }
        return redirect()->back()->with('error','Invalid credentials');
    }
}
