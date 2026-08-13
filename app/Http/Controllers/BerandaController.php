<?php

namespace App\Http\Controllers;

use App\Models\InstagramPostUrl;

class BerandaController extends Controller
{
    public function __invoke()
    {
        $instagramUrls = InstagramPostUrl::orderByDesc('id')->get();

        return view('pages.beranda', compact('instagramUrls'));
    }
}
