<?php

use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
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

    // User Route
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('', [AdminDashboardController::class, 'index'])->name('index');
    });

});
