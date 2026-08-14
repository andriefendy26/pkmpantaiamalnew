<?php

namespace App\Http\Controllers;

class LayananLainnyaController extends Controller
{
    public function surveyKepuasan()
    {
        return view('pages.survey-kepuasan-masyarakat');
    }

    public function ppid()
    {
        return view('pages.ppid');
    }

    public function sippn()
    {
        return view('pages.sippn');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function statistik()
    {
        return view('pages.statistik');
    }

    public function kunjunganPasien()
    {
        return view('pages.statistik-kunjungan-pasien');
    }

    public function penyakitTerbanyak()
    {
        return view('pages.statistik-penyakit-terbanyak');
    }
}
