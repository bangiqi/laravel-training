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

Route::get('/data_mahasiswa', function () {
    return view('data_mahasiswa');
});

Route::get('/data_mahasiswa/add', function () {
    return view('add_mahasiswa');
});

Route::get('/', function () {
    return view('welcome');
});
