<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Laravel\Socialite\Facades\Socialite;


//main page
Route::get('/', [AdminController::class, 'index']);

//register page
//the post method is to be used here
Route::get('/register',[AdminController::class, 'registerForm']);

Route::post('/signup',[AdminController::class, 'signup'])->name('sign-up');

Route::post('/signin',[AdminController::class, 'signin'])->name('sign-in');

//login page
Route::get('/login',[AdminController::class, 'loginForm'])->name('login');


//logout page
Route::get('/logout',[AdminController::class, 'logoutForm']);


Route::get('/dashboard',[AdminController::class, 'adminDashboard'])->name('admin-dashboard')->middleware('auth');
Route::get('/profile',[AdminController::class, 'adminProfile'])->name('admin-profile')->middleware('auth');
Route::get('/candidate',[AdminController::class, 'adminCandidate'])->name('admin-candidate')->middleware('auth');
Route::get('/ATS',[AdminController::class, 'adminATS'])->name('admin-ATS')->middleware('auth');
Route::get('/job-analytics',[AdminController::class, 'adminJobAnalytics'])->name('admin-job-analytics')->middleware('auth');






 //redirect the user to the OAuth provider
Route::post('auth/google',[GoogleAuthController::class, 'redirect'])->name('google-auth');



Route::get('/auth/google/call-back',[GoogleAuthController::class, 'callbackGoogle']);
