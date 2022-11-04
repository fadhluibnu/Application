<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Page\Home;
use App\Models\Dokumen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', Home::class)->middleware('auth')->name('home');
Route::post('/', [Home::class, 'storeDokumen'])->middleware('auth');

// Route::get('/', function () {
//     return Dokumen::where('pemohon', auth()->user()->id)->get();
// })->middleware('auth')->name('home');

Route::get('/login', Login::class)->name('login')->middleware('guest');
