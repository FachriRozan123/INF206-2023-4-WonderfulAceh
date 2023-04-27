<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app');
});

Route::get('/nama_category', function () {
    return view('nama_category');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/thisorthat', function () {
    return view('thisorthat');
});