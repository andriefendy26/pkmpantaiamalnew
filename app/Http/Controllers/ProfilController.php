<?php

namespace App\Http\Controllers;

class ProfilController extends Controller
{
    public function tentang()
    {
        return view('pages.profil-tentang');
    }

    public function visiMisi()
    {
        return view('pages.profil-visi-misi');
    }

    public function strukturOrganisasi()
    {
        return view('pages.profil-struktur');
    }

    public function tenagaKesehatan()
    {
        return view('pages.profil-tenaga-kesehatan');
    }
}
