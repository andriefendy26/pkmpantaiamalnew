<?php

namespace App\Http\Controllers;

class InformasiController extends Controller
{
    public function jadwalPelayanan()
    {
        return view('pages.informasi-jadwal');
    }

    public function dokterTenagaKesehatan()
    {
        return view('pages.informasi-dokter');
    }

    public function beritaPengumuman()
    {
        return view('pages.informasi-berita');
    }

    public function informasiKesehatan()
    {
        return view('pages.informasi-kesehatan');
    }
}
