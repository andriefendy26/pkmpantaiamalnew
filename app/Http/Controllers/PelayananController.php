<?php

namespace App\Http\Controllers;

class PelayananController extends Controller
{
    public function klaster1()
    {
        return view('pages.pelayanan-klaster1');
    }

    public function klaster2()
    {
        return view('pages.pelayanan-klaster2');
    }

    public function klaster3()
    {
        return view('pages.pelayanan-klaster3');
    }

    public function klaster4()
    {
        return view('pages.pelayanan-klaster4');
    }

    public function lintasKlaster()
    {
        return view('pages.pelayanan-lintas');
    }

    public function jadwalPelayanan()
    {
        return view('pages.jadwal-pelayanan');
    }
}
