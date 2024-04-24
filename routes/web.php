<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Models\JobPost;
use Laravel\Socialite\Facades\Socialite;


//main page
Route::get('/', [AdminController::class, 'index'])->name('index');

//register page for recruiter
Route::get('/register',[AdminController::class, 'registerForm']);

Route::post('/signup',[AdminController::class, 'signup'])->name('sign-up');

Route::post('/signin',[AdminController::class, 'signin'])->name('sign-in');

//login page for recruiter
Route::get('/login',[AdminController::class, 'loginForm'])->name('login');

//logout page for recruiter
Route::get('/adminlogout',[AdminController::class, 'adminlogout'])->name('admin-logout');

//register page for user
//login page for user
Route::get('/userLogin',[UserController::class, 'userLogin'])->name('user-login');
Route::post('/userSignin',[UserController::class, 'userSignin'])->name('user-signin');
Route::post('/userSignup',[UserController::class, 'userSignup'])->name('user-signup');


 //redirect the user to the OAuth provider
Route::post('auth/google',[GoogleAuthController::class, 'redirect'])->name('google-auth');

Route::get('/auth/google/call-back',[GoogleAuthController::class, 'callbackGoogle']);

//main-features route for user
Route::get('/userDashboard',[UserController::class, 'userDashboard'])->name('user-dashboard')->middleware('auth');



//main-features route for admin
Route::get('/dashboard',[AdminController::class, 'adminDashboard'])->name('admin-dashboard')->middleware('auth');
Route::get('/profile',[AdminController::class, 'adminProfile'])->name('admin-profile')->middleware('auth');
Route::get('/candidate',[AdminController::class, 'adminCandidate'])->name('admin-candidate')->middleware('auth');
Route::get('/ATS',[AdminController::class, 'adminATS'])->name('admin-ATS')->middleware('auth');
Route::get('/job-analytics',[AdminController::class, 'adminJobAnalytics'])->name('admin-job-analytics')->middleware('auth');

//Job Analytics -> create-job posts
Route::get('/job-analytics/create-job',[JobController::class, 'createJob'])->name('create-job')->middleware('auth');
Route::get('/job-analytics/view-application',[JobController::class, 'viewApplication'])->name('view-application')->middleware('auth');
Route::get('/job-analytics/rejected-application',[JobController::class, 'rejectedApplication'])->name('rejected-application')->middleware('auth');
Route::get('/job-analytics/pending-application',[JobController::class, 'pendingApplication'])->name('pending-application')->middleware('auth');


//create-job
Route::post('/submit',[JobController::class, 'submitJob'])->name('submit-job');
Route::get('/job-analytics/read/{id}',[JobController::class, 'readJob']);
Route::get('/job-analytics/edit/{id}',[JobController::class, 'editJob']);
Route::get('/job-analytics/delete/{id}',[JobController::class, 'deleteJob']);


Route::post('/job-analytics/update/{id}', [JobController::class, 'updateJob']);