<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\WorkHistoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('/')->middleware('guest')->group(function () {
    Route::get('login', function () {return view('auth.login');})->name('login');
    Route::post('login',[App\Http\Controllers\AuthController::class,'login'])->name('login.perform');
    Route::get('register', function () {return view('auth.register');})->name('register');
    Route::post('register',[App\Http\Controllers\AuthController::class,'store'])->name('register.perform');
});

Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::group(['prefix' => 'developer'], function(){
        Route::get('/', [App\Http\Controllers\Developer\DashboardController::class, 'index'])->name('developer');
        Route::group(['prefix' => 'profile'], function(){
            Route::get('/', [App\Http\Controllers\Developer\ProfileController::class, 'create'])->name('developer.profile');
            Route::post('perform', [App\Http\Controllers\Developer\ProfileController::class, 'update'])->name('developer.profile.perform');
            Route::post('change/password', [App\Http\Controllers\Developer\ProfileController::class, 'show'])->name('developer.profile.change.password');
            Route::post('picture/update', [App\Http\Controllers\Developer\ProfileController::class, 'picture_update'])->name('developer.change-profile.picture');
        });
    });
});
Route::get('/',[App\Http\Controllers\WebsiteController::class, 'index'])->name('website');
Route::get('{user_id}', [FrontendController::class, 'show'])->name('frontend.profile.show');
Route::get('{user_id}/resume', [FrontendController::class, 'resume'])->name('frontend.profile.resume');
Route::get('{user_id}/projects', [FrontendController::class, 'projects'])->name('frontend.profile.projects');
Route::get('{user_id}/contact', [FrontendController::class, 'contact'])->name('frontend.profile.contact');
