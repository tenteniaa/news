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
    return view('content');
});

Route::get('/tenews/kampus-unissula', function () {
    return view('content');
});

Route::get('/tenews/kampus-unissula/penulis', function () {
    return view('writer');
});
