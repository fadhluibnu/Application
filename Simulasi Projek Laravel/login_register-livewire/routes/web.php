<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/register', Register::class)->middleware('guest')->name('register');
Route::get('/login', Login::class)->middleware('guest')->name('login');

Route::get('/', Dashboard::class)->middleware('auth')->name('dashboard');
