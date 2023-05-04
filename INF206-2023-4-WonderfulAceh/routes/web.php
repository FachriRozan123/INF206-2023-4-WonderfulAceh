<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempatWisataController ;
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
Route::get('/frame50', function () {
    return view('frame50');
});