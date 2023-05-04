<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempatWisataController;
use App\Http\Controllers\TourGuideController;
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
    return view('welcome');
});

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
Route::resource('holiday',TempatWisataController::class);

Route::get('/addTourGuide', function () {
    return view('addTourGuide');
});
Route::get('/thisorthat', function () {
    return view('thisorthat');
});
Route::get('/nama_category', function () {
    return view('nama_category');
});
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/rekomendasi', function () {
    return view('rekomendasi');
});

Route::get('/chattourguide', function () {
    return view('chattourguide');
});

Route::get('/chatpemiliktempat', function () {
    return view('chatpemiliktempat');
});
Route::resource('tour_guide',TourGuideController::class);