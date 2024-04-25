<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
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
    public function userProfile(){
        return view('User-UI.profileuser');
    }
    public function userSearchJob(){
        $posts =JobPost::all();
        return view('User-UI.searchjobuser',['posts'=>$posts]);
    }
    public function userApplication(){
        return view('User-UI.applicationuser');
    }
    public function userContact(){
        return view('User-UI.contactuser');
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
            'email' =>'required|email',
            'password' => 'required',
        ]);
        $credentials = $req->only('email','password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role_id === 0) {
                return redirect()->route('user-dashboard');
            }
        }
        return redirect()->back()->with('error','Invalid credentials');
    }

    public function userlogout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function store(){
        
    }
}
