<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

Route::get('/portal', function () {
    return view('pages.portal');
})->name('portal');

Route::get('/galeri', function () {
    return view('pages.galeri');
})->name('galeri');