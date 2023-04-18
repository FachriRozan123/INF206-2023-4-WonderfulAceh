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

<<<<<<< HEAD
Route::get('/nama_category', function () {
    return view('nama_category');
});

Route::get('/category', function () {
    return view('category');
=======
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/addTempat', function () {
    return view('addTempat');
});
Route::get('/addTourGuide', function () {
    return view('addTourGuide');
>>>>>>> main
});