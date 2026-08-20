<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LayananLainnyaController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\PengaduanController;
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
Route::get('/profil/maklumat-pelayanan', [ProfilController::class, 'maklumatPelayanan'])->name('profil.maklumat');
Route::get('/profil/hak-dan-kewajiban-pasien', [ProfilController::class, 'hakDanKewajibanPasien'])->name('profil.hak-kewajiban');

Route::get('/layanan/klaster-1-manajemen', [PelayananController::class, 'klaster1'])->name('layanan.klaster1');
Route::get('/layanan/klaster-2-ibu-anak', [PelayananController::class, 'klaster2'])->name('layanan.klaster2');
Route::get('/layanan/klaster-3-dewasa-lanjut-usia', [PelayananController::class, 'klaster3'])->name('layanan.klaster3');
Route::get('/layanan/klaster-4-penyakit-menular', [PelayananController::class, 'klaster4'])->name('layanan.klaster4');
Route::get('/layanan/lintas-klaster', [PelayananController::class, 'lintasKlaster'])->name('layanan.lintas');
Route::get('/jadwal-pelayanan', [PelayananController::class, 'jadwalPelayanan'])->name('layanan.jadwal-pelayanan');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/layanan/{slug}', [LayananController::class, 'show'])->name('layanan.show');

Route::get('/informasi/jadwal-pelayanan', [InformasiController::class, 'jadwalPelayanan'])->name('informasi.jadwal');
Route::get('/informasi/dokter-tenaga-kesehatan', [InformasiController::class, 'dokterTenagaKesehatan'])->name('informasi.dokter');
Route::get('/informasi/berita-pengumuman', [InformasiController::class, 'beritaPengumuman'])->name('informasi.berita');
Route::get('/informasi/informasi-kesehatan', [InformasiController::class, 'informasiKesehatan'])->name('informasi.kesehatan');

Route::get('/portal', function () {
    return view('pages.portal');
})->name('portal');

Route::get('/survey-kepuasan-masyarakat', [LayananLainnyaController::class, 'surveyKepuasan'])->name('layanan.survey');
Route::get('/ppid', [LayananLainnyaController::class, 'ppid'])->name('layanan.ppid');
Route::get('/sippn', [LayananLainnyaController::class, 'sippn'])->name('layanan.sippn');
Route::get('/faq', [LayananLainnyaController::class, 'faq'])->name('faq');

Route::get('/statistik', [LayananLainnyaController::class, 'statistik'])->name('statistik');
Route::get('/statistik/kunjungan-pasien', [LayananLainnyaController::class, 'kunjunganPasien'])->name('statistik.kunjungan');
Route::get('/statistik/penyakit-terbanyak', [LayananLainnyaController::class, 'penyakitTerbanyak'])->name('statistik.penyakit');
Route::get('/produk', [LayananLainnyaController::class, 'produkLayanan'])->name('produk');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/galeri/{slug}', [GaleriController::class, 'show'])->name('galeri.show');

Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');

// Route::get('/fitur', [FiturController::class, 'index'])->name('fitur');
// Route::get('/fitur/{slug}', [FiturController::class, 'show'])->name('fitur.show');

Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan');
Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
