<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AuthAPI;
use GuzzleHttp\Middleware;
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

Route::middleware([AuthAPI::class])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest')->name('loginapi');
