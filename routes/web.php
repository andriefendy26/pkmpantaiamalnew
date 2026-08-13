<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', BerandaController::class)->name('beranda');

Route::get('/profil', function () {
    return view('pages.profil');
})->name('profil');

Route::get('/profil/tentang', [ProfilController::class, 'tentang'])->name('profil.tentang');
Route::get('/profil/visi-misi', [ProfilController::class, 'visiMisi'])->name('profil.visi-misi');
Route::get('/profil/struktur-organisasi', [ProfilController::class, 'strukturOrganisasi'])->name('profil.struktur');
Route::get('/profil/tenaga-kesehatan', [ProfilController::class, 'tenagaKesehatan'])->name('profil.tenaga-kesehatan');

Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/layanan/{slug}', [LayananController::class, 'show'])->name('layanan.show');
Route::get('/layanan/klaster-1-manajemen', [PelayananController::class, 'klaster1'])->name('layanan.klaster1');
Route::get('/layanan/klaster-2-ibu-anak', [PelayananController::class, 'klaster2'])->name('layanan.klaster2');
Route::get('/layanan/klaster-3-dewasa-lanjut-usia', [PelayananController::class, 'klaster3'])->name('layanan.klaster3');
Route::get('/layanan/klaster-4-penyakit-menular', [PelayananController::class, 'klaster4'])->name('layanan.klaster4');
Route::get('/layanan/lintas-klaster', [PelayananController::class, 'lintasKlaster'])->name('layanan.lintas');

Route::get('/informasi/jadwal-pelayanan', [InformasiController::class, 'jadwalPelayanan'])->name('informasi.jadwal');
Route::get('/informasi/dokter-tenaga-kesehatan', [InformasiController::class, 'dokterTenagaKesehatan'])->name('informasi.dokter');
Route::get('/informasi/berita-pengumuman', [InformasiController::class, 'beritaPengumuman'])->name('informasi.berita');
Route::get('/informasi/informasi-kesehatan', [InformasiController::class, 'informasiKesehatan'])->name('informasi.kesehatan');

Route::get('/portal', function () {
    return view('pages.portal');
})->name('portal');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/galeri/{slug}', [GaleriController::class, 'show'])->name('galeri.show');

Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');

Route::get('/fitur', [FiturController::class, 'index'])->name('fitur');
Route::get('/fitur/{slug}', [FiturController::class, 'show'])->name('fitur.show');
