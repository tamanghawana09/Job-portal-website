<?php

use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobApplicationController;
use App\Models\JobPost;
use Laravel\Socialite\Facades\Socialite;


//main page
Route::get('/', [AdminController::class, 'index'])->name('index');

//register & login page for recruiter
Route::get('/register',[AdminController::class, 'registerForm']);
Route::post('/signup',[AdminController::class, 'signup'])->name('sign-up');
Route::post('/signin',[AdminController::class, 'signin'])->name('sign-in');
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
Route::get('/userProfile',[UserController::class, 'userProfile'])->name('user-profile')->middleware('auth');
Route::get('/userSearchJob',[UserController::class, 'userSearchJob'])->name('search-job')->middleware('auth');
Route::get('/userApplication',[UserController::class, 'userApplication'])->name('user-application')->middleware('auth');
Route::get('/userContact',[UserController::class, 'userContact'])->name('user-contact')->middleware('auth');
Route::get('/userLogout',[UserController::class, 'userlogout'])->name('user-logout');
Route::post('/contact',[ContactController::class, 'submitForm'])->name('contact.submit')->middleware('auth');
Route::post('/detailStore',[UserController::class, 'detailStore'])->name('store.data')->middleware('auth');
Route::post('/educationStore',[UserController::class, 'educationStore'])->name('store.education')->middleware('auth');
Route::post('/skillStore',[UserController::class, 'skillStore'])->name('store.skill')->middleware('auth');
Route::post('/trainingStore',[UserController::class, 'trainingStore'])->name('store.training')->middleware('auth');
Route::post('/emailStore',[UserController::class, 'emailStore'])->name('store.email')->middleware('auth');
Route::get('/userSearchJob/read/{id}',[UserController::class, 'readPost']);
Route::get('/userSearchJob/apply/{id}',[JobApplicationController::class, 'apply'])->name('apply');




//main-features route for admin
Route::get('/dashboard',[AdminController::class, 'adminDashboard'])->name('admin-dashboard')->middleware('auth:admin');
Route::get('/profile',[AdminController::class, 'adminProfile'])->name('admin-profile')->middleware('auth:admin');
Route::get('/candidate',[AdminController::class, 'adminCandidate'])->name('admin-candidate')->middleware('auth:admin');
Route::get('/ATS',[AdminController::class, 'adminATS'])->name('admin-ATS')->middleware('auth:admin');
Route::get('/job-analytics',[AdminController::class, 'adminJobAnalytics'])->name('admin-job-analytics')->middleware('auth:admin');

//Job Analytics -> create-job posts
Route::get('/job-analytics/create-job',[JobController::class, 'createJob'])->name('create-job')->middleware('auth:admin');
Route::get('/job-analytics/view-application',[JobController::class, 'viewApplication'])->name('view-application')->middleware('auth:admin');
Route::get('/job-analytics/rejected-application',[JobController::class, 'rejectedApplication'])->name('rejected-application')->middleware('auth:admin');
Route::get('/job-analytics/pending-application',[JobController::class, 'pendingApplication'])->name('pending-application')->middleware('auth:admin');


//create-job
Route::post('/submit',[JobController::class, 'submitJob'])->name('submit-job');
Route::get('/job-analytics/read/{id}',[JobController::class, 'readJob']);
Route::get('/job-analytics/edit/{id}',[JobController::class, 'editJob']);
Route::get('/job-analytics/delete/{id}',[JobController::class, 'deleteJob']);
Route::post('/job-analytics/update/{id}', [JobController::class, 'updateJob']);