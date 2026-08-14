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
}
