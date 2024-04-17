<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Psr\Http\Message\ResponseInterface;

class AdminController extends Controller
{
    public function index(){
        return view('index');
    }
    public function registerForm(){
        return view('register');
    }
    public function loginForm(){
        return view('login');
    }

    public function logoutForm(){
        Auth::logout();
        return redirect()->route('login'); 
    }

    public function adminDashboard(){
        return view('Admin.adminDashboard');
    }

    public function signup(Request $req){
        $req->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::create ([
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'username' => $req->username,
        ]);
        Auth::login($user);
        return redirect()->route('login');
    }

    public function signin(Request $req){
        $req->validate([
            'email' =>['required', 'email'],
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' =>$req->email, 'password' => $req->password])){
            return redirect()->route('admin-dashboard');
        }
        return redirect()->back()->with('error','Invalid credentials');
    }
}
