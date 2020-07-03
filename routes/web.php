<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function () {
    return view('adminlte.master');
});

Route::get('/pertanyaan', 'PertanyaanController@index'); //menampilkan halaman

Route::get('/pertanyaan/create', 'PertanyaanController@create'); //menyimpan data

Route::post('/pertanyaan', 'PertanyaanController@store'); //menyimpan dan menampilkan semua data setelah dilakukan penginputan
