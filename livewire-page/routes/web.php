<?php

use App\Http\Livewire\Overview;
use App\Http\Livewire\TambahData;
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

Route::get('/', Overview::class);
Route::get('/tambah', TambahData::class);
