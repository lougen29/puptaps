<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ========== Module Route ==============================================================================================

// Group for Homepage and Landing Page
Route::group(['controller' => 'App\Http\Controllers\Modules\HomeController'], function() {

    //App\Http\Controllers\Modules\
    // Route for Landing Page View
    Route::get('/', 'getLandingPage')->middleware('isLoggedIn')->name('landingPage');

    // Route for HomePage View
    Route::get('/home', 'getUserHomepage')->middleware(['auth', 'verified', 'isAdmin'])->name('user.homepage');

    Route::get('/admin', 'getAdminHomepage')->middleware(['auth', 'isLoggedIn', 'isUser'])->name('admin.homepage');
});

Route::group(['middleware' => 'auth', 'prefix' => 'email', 'as' => 'verification.'], function() {
    // After Registration Email Verification
    Route::get('verify', function () {
        return view('auth.verify-email');
    })->name('notice');

    //User verified using email
    Route::get('verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/home');
    })->middleware(['signed'])->name('verify');

    //Resending of Email Verification
    Route::post('verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['throttle:6,1'])->name('send');
});

// Login - Registration
require __DIR__.'/auth.php';
// ========== End of Module Route =======================================================================================



// ========== User Route =================================================================================================

// User - Career
Route::group(['controller' => 'App\Http\Controllers\Modules\CareerController', 'prefix' => 'career', 'as' => 'userCareer.', 'middleware' => ['isAdmin', 'auth']], function() {
    Route::get('index', 'getCareerIndex')->name('index');
    Route::post('add/text-career', 'addTextCareer')->name('addTextCareer');
    Route::post('add/image-career', 'addImageCareer')->name('addImageCareer');
    Route::post('application', 'applyCareer')->name('applyCareer');
});

// User - Profile
Route::group(['controller' => 'App\Http\Controllers\Modules\ProfileController', 'prefix' => 'profile', 'as' => 'userProfile.', 'middleware' => ['isAdmin', 'auth']], function() {
    Route::get('settings', 'getProfileIndex')->name('index');
    Route::patch('settings/update-profile/{alumni_ID}', 'updateProfile')->name('updateProfile');
});

// User - Forms
Route::group(['controller' => 'App\Http\Controllers\Modules\FormsController', 'prefix' => 'form', 'as' => 'userForm.', 'middleware' => ['isAdmin', 'auth']], function() {
    Route::get('index', 'getFormIndex')->name('index');
    Route::get('personal-data-sheet', 'getPDS')->name('getPDS');
    Route::get('exit-interview', 'getExiteInterview')->name('getExiteInterview');
    Route::get('sas', 'getSAS')->name('getSAS');
});

Route::group(['controller' => 'App\Http\Controllers\Modules\FormPDFController', 'prefix' => 'downloads', 'as' => 'userForm.', 'middleware' => ['isAdmin', 'auth']], function() {
    Route::post('PDS-form', 'downloadPDS')->name('downloadPDS');
    Route::post('SAS-form', 'downloadSAS')->name('downloadSAS');
});

// ========== End of User Route ======================================================================================



// ========== Admin Route ===========================================================================================

// Admin - User Management
Route::group(['controller' => 'App\Http\Controllers\Admin\AlumniListController', 'prefix' => 'admin/user-management', 'as' => 'adminUserManagement.', 'middleware' => ['isUser', 'auth']], function() {
    Route::get('alumni-list', 'alumniListIndex')->name('alumniList');
    Route::post('add-alumni-list', 'addAlumniList')->name('addAlumniList');
    Route::post('add-alumni-list', 'addAlumniList')->name('addAlumniList');
});

Route::group(['controller' => 'App\Http\Controllers\Admin\CareerController', 'prefix' => 'admin/career', 'as' => 'adminCareer.', 'middleware' => ['isUser', 'auth']], function() {
    Route::get('requests', 'getCareerRequest')->name('getCareerRequest');
    Route::patch('approve-career/{careerID}', 'approveCareer')->name('approveCareer');
});
// ========== End of Route ========================================================================================
