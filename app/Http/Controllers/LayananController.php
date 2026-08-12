<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::active()
            // ->ordered()
            ->paginate(12);

        return view('pages.layanan', compact('layanans'));
    }

    public function show(string $slug)
    {
        $layanan = Layanan::active()
            ->where('slug', $slug)
            ->firstOrFail();

        $related = Layanan::active()
            ->where('id', '!=', $layanan->id)
            ->ordered()
            ->limit(3)
            ->get();

        return view('pages.layanan-detail', compact('layanan', 'related'));
    }
}
