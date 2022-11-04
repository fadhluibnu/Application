<?php

use Illuminate\Support\Facades\Route;
use PhpOffice\PhpWord\IOFactory;

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
    return view('send');
});
Route::post('/', function () {
    $name = request()->file('filename');

    echo date('H:i:s'), " Reading contents from `{$name}`", PHP_EOL;
    $phpWord = IOFactory::load($name);
    echo write($phpWord, basename(__FILE__, '.php'), $writers);
});
