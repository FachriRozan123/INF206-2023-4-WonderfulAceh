<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempatWisataController;
use App\Http\Controllers\TourGuideController;
<<<<<<< HEAD
use App\Http\Controllers\CategoryController;
=======
use App\Http\Controllers\RekomendasiController;
>>>>>>> 2108107010065
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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

=======
>>>>>>> 2108107010065
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return redirect('/welcome');
    });
    
    Route::get('/welcome', function () {
        return view('welcome');
    });
    Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');

    // Rute untuk hasil pencarian
    Route::get('/hasil-pencarian/{keyword}', [HasilPencarianController::class, 'index'])->name('hasil_pencarian');
});
<<<<<<< Updated upstream
Route::get('/category',[CategoryController::class,'index']);
Route::get('/category/{slug}',[CategoryController::class, 'place']);
// web.php

Route::get('/search', [TempatWisataController::class, 'searchByName']);

=======
Route::get('/category', function () {
    return view('category');
});
Route::get('/nama_category', function () {
    return view('nama_category');
});
Route::get('/AboutUs', function () {
    return view('AboutUs');
});
Route::get('/search', function () {
    return view('search');
});
>>>>>>> Stashed changes
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
Route::get('/tempat', function () {
    return view('tempat');
});
Route::get('/tempat/{slug}',[TempatWisataController::class, 'place']);
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
<<<<<<< HEAD
Route::resource('tour_guide',TourGuideController::class);
=======

Route::get('/AboutUs', function () {
    return view('AboutUs');
});

Route::resource('tour_guide',TourGuideController::class);

Route::get('/rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi');
Route::post('/search', [RekomendasiController::class, 'search'])->name('rekomendasi.search');
>>>>>>> 2108107010065
