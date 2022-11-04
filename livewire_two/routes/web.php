<?php

use App\Http\Livewire\Create;
use App\Http\Livewire\Edit;
use App\Http\Livewire\Index;
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
Route::get('/', Index::class)->name('post.index');;
Route::get('/create', Create::class)->name('post.create');;
Route::get('/edit/{id}', Edit::class)->name('post.edit');;
