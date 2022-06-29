<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/telegram', [App\Http\Controllers\TelegramNotificationController::class, 'index']);
Route::get('/user_profile', [App\Http\Controllers\UserProfileController::class, 'index']);
Route::get('/credit/new', [App\Http\Controllers\CreditController::class, 'index']);