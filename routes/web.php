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
    return view('index');
});

Route::resource('administracijas', 'AdministracijaController');
Route::resource('komercijalas', 'KupacController');
Route::resource('operaters', 'OperaterController');
Route::resource('komercijalas', 'KomercijalaController');
Route::resource('statuses', 'StatusController');
Route::resource('kupacs', 'KupacController');
