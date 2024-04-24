<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\JobPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psr\Http\Message\ResponseInterface;

class AdminController extends Controller
{
    public function index(){
        $posts =JobPost::all();
        return view('index', ['posts' => $posts]);
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
        return view('Admin-UI.adminDashboard');
    }
    public function adminProfile(){
        return view('Admin-UI.adminProfile');
    }
    public function adminCandidate(){
        return view('Admin-UI.adminCandidate');
    }
    public function adminATS(){
        return view('Admin-UI.adminATS');
    }
    public function adminJobAnalytics(){
        $posts =JobPost::all();
        return view('Admin-UI.adminJobAnalytics' ,['posts' => $posts]);
    }

    
    public function signup(Request $req){
        $req->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required',
        ]);

        $role_id = 1;

        $user = User::create ([
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'username' => $req->username,
            'role_id' => $role_id,
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

    public function adminlogout(){
        Auth::logout();
        return redirect()->route('index');
    }

}
