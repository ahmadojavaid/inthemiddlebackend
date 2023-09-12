<?php

use App\Http\Controllers\Admin\Business\BusinessController;
use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
use App\Http\Controllers\Admin\Job\JobController;
use App\Http\Controllers\Admin\User\UserController;
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

Route::get('/', function () {
    return view('welcome');
});



//Admin Routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => [/*AdminSession::class, AdminLayoutData::class, NavBar::class*/]], function () {

    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('index');

    // User Route
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('', [UserController::class, 'index'])->name('index');
        Route::post('block', [UserController::class, 'block'])->name('block');
        Route::post('delete', [UserController::class, 'delete'])->name('delete');
    });

    // Jobs Route
    Route::group(['prefix' => 'jobs', 'as' => 'jobs.'], function () {
        Route::get('', [JobController::class, 'index'])->name('index');
        Route::get('detail/{id}', [JobController::class, 'detail'])->name('detail');
        Route::post('block', [JobController::class, 'block'])->name('block');
        Route::post('delete', [JobController::class, 'delete'])->name('delete');
    });

    // Business Route
    Route::group(['prefix' => 'businesses', 'as' => 'businesses.'], function () {
        Route::get('', [BusinessController::class, 'index'])->name('index');
        Route::get('detail/{id}', [BusinessController::class, 'detail'])->name('detail');
        Route::post('block', [BusinessController::class, 'block'])->name('block');
        Route::post('delete', [BusinessController::class, 'delete'])->name('delete');
    });

});
