<?php

use App\Http\Livewire\Dashboard\Overview;
use App\Http\Livewire\Dashboard\Students;
use App\Imports\StudentImport;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('/', Overview::class);
Route::get('/add', Students::class);
// Route::post('/add', [Students::class, 'store']);
// function () {
//     Excel::import(new StudentImport, request()->file('file'));
//     return redirect('/add');
// }

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
