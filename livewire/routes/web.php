<?php

use App\Http\Controllers\SiswaController;
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

Route::post('/siswa/import_excel', [SiswaController::class, 'import_excel']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/export_excel', [SiswaController::class, 'export_excel']);
Route::post('/siswa/import_excel', [SiswaController::class, 'import_excel']);
