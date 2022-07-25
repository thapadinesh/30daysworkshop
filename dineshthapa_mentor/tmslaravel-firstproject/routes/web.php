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
    return view('auth.login');
});

Route::resource('task','App\Http\Controllers\TaskController')->middleware('auth');
Route::get('/task/generate/pdf','App\Http\Controllers\TaskController@createpdf')->name('createpdf');
Route::post('/task/import/excel','App\Http\Controllers\TaskController@importexcel')->name('importexcel');
Route::get('/task/export/excel','App\Http\Controllers\TaskController@exportexcel')->name('exportexcel');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
