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




Route::get('/login', function () {return view('auth.login');})->name('login');
Route::post('user/login',[AuthController::class,'login'])->name('user.login');
Route::get('register', function () {return view('auth.register');})->name('register');
Route::post('user/register',[AuthController::class,'store'])->name('user.register');

Route::prefix('/')->middleware('auth')->group(function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'admin'], function() {
        Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('admin.index');
        Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
        Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
        Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
        Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
    });

    Route::group(['prefix' => 'dashboard'], function(){
        Route::get('/', [App\Http\Controllers\ProfileController::class, 'index'])->name('dashboard');
    });
    Route::post('/store', [App\Http\Controllers\ProfileController::class, 'store'])->name('profiles.store');
    Route::put('/update/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profiles.update');

    Route::post('/educations/store', [App\Http\Controllers\ProfileController::class, 'storeEducation'])->name('educations.store');
    Route::put('/educations/update/{id}', [App\Http\Controllers\ProfileController::class, 'updateEducation'])->name('educations.update');

    Route::post('/references/store', [ReferenceController::class, 'store'])->name('references.store');
    Route::put('/references/update/{id}', [ReferenceController::class, 'update'])->name('references.update');

    Route::post('/summary/store', [SummaryController::class, 'store'])->name('summary.store');
    Route::put('/summary/{id}/update', [SummaryController::class, 'update'])->name('summary.update');

    Route::post('/work_history/store', [WorkHistoryController::class, 'store'])->name('work_history.store');
    Route::put('/work_history/update/{id}', [WorkHistoryController::class, 'update'])->name('work_history.update');

    Route::post('/skills/store', [SkillsController::class, 'store'])->name('skills.store');
    Route::put('/skills/update/{id}', [SkillsController::class, 'update'])->name('skills.update');

    Route::post('/hobby/store', [HobbyController::class, 'store'])->name('hobby.store');
    Route::put('/hobby/update/{id}', [HobbyController::class, 'update'])->name('hobby.update');

    Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
    Route::put('/projects/update/{id}', [ProjectController::class, 'update'])->name('projects.update');
});

Route::get('/',[FrontendController::class,'index'])->name('frontend.index');
Route::get('{user_id}', [FrontendController::class, 'show'])->name('frontend.profile.show');
Route::get('{user_id}/resume', [FrontendController::class, 'resume'])->name('frontend.profile.resume');
Route::get('{user_id}/projects', [FrontendController::class, 'projects'])->name('frontend.profile.projects');
Route::get('{user_id}/contact', [FrontendController::class, 'contact'])->name('frontend.profile.contact');