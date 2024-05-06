<?php

use App\Models\Struktur;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TestiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\DashboardController;

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

Route::get('/',   [PostController::class, 'dash'] );
// Route::get('/ed',   [PostController::class, 'update'] );

Route::get('/adm', function () {
    return view('dashboard.header.post');
});

// Route::get('/idx', function () {
//     return view('frontend.cp');
// });



Route::get('/p',  [PostController::class, 'index']);

// Route::post('/post', [PostController::class,  'header']) -> name('post');
Route::resource('post', PostController::class);

// Route::get('/admn', [DashboardController::class, 'index']);

Route::resource('admin', AdminController::class);
Route::get('admin', [AdminController::class, 'index']);


Route::resource('visi', VisiController::class);
Route::get('visi', [VisiController::class, 'index']);

Route::resource('brand', BrandController::class);
Route::get('brand', [BrandController::class, 'index']);
// Route::get('/login-proses', [AdminController::class, 'createvisi'])->name('createvisi');
// Route::post('/store', [AdminController::class, 'storevisi'])->name('storevisi');

//  Route::get('/ed', [AdminController::class, 'editvisi'])->name('visi.edit');
// Route::put('/update', [AdminController::class, 'updatevisi'])->name('updatevisi');

// Route::put('/hapus', [AdminController::class, 'destroyvisi'])->name('destroyvisi');


Route::resource('profil', ProfilController::class);
Route::get('profil', [ProfilController::class, 'index']);

Route::resource('layanan', LayananController::class);
Route::get('layanan', [LayananController::class, 'index']);

Route::resource('about', AboutController::class);
Route::get('about', [AboutController::class, 'index']);

Route::resource('struktur', StrukturController::class);
Route::get('struktur', [StrukturController::class, 'index']);

Route::resource('testi', TestiController::class);
Route::get('testi', [TestiController::class, 'index']);

Route::resource('brand', BrandController::class);
Route::get('brand', [BrandController::class, 'index']);

Route::get('front', [AdminController::class, 'frontend']);

Route::get('f', [AdminController::class, 'gabungan']);