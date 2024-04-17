<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;


//main page
Route::get('/', [UserController::class, 'index']);

//register page
//the post method is to be used here
Route::get('/register',[UserController::class, 'registerForm']);

Route::post('/signup',[UserController::class, 'signup'])->name('sign-up');

Route::post('/signin',[UserController::class, 'signin'])->name('sign-in');

//login page
Route::get('/login',[UserController::class, 'loginForm'])->name('login');


//logout page
Route::get('/logout',[UserController::class, 'logoutForm']);


Route::get('/dashboard',[UserController::class, 'userDashboard'])->name('user-dashboard');






 //redirect the user to the OAuth provider
Route::post('auth/google',[GoogleAuthController::class, 'redirect'])->name('google-auth');



Route::get('/auth/google/call-back',[GoogleAuthController::class, 'callbackGoogle']);
