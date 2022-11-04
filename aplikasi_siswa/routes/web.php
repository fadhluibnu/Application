<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Dashboard\Overview;
use App\Http\Livewire\Dashboard\StudentExcel;
use App\Http\Livewire\Dashboard\Students;
use App\Http\Livewire\Dashboard\StudentValidationLivewire;
use App\Models\StudentDataValidation;
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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', Overview::class)->name('dashboard.overview');
    Route::get('/add', Students::class);
    Route::get('/add/file', StudentExcel::class);
    Route::post('/add/file', [StudentController::class, 'store']);
    // Route::post('/add', [StudentController::class, 'store']);
    Route::get('/add/validation', StudentValidationLivewire::class);
    Route::post('/logout', [LoginController::class, 'logout']);
});
Route::get('/login', Login::class)->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', Register::class)->name('auth.regist')->middleware('guest');
