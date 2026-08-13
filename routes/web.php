<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', BerandaController::class)->name('beranda');

Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

Route::get('/portal', function () {
    return view('pages.portal');
})->name('portal');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/galeri/{slug}', [GaleriController::class, 'show'])->name('galeri.show');

Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/layanan/{slug}', [LayananController::class, 'show'])->name('layanan.show');

Route::get('/fitur', [FiturController::class, 'index'])->name('fitur');
Route::get('/fitur/{slug}', [FiturController::class, 'show'])->name('fitur.show');
