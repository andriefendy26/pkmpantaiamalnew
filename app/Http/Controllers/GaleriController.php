<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GaleriController extends Controller
{
    public function index()
    {
        $galleries = Gallery::active()
            ->ordered()
            ->withCount('items')
            ->paginate(12);

        return view('pages.galeri', compact('galleries'));
    }

    public function show(string $slug)
    {
        $gallery = Gallery::active()
            ->where('slug', $slug)
            ->with(['items' => fn ($q) => $q->where('is_active', true)->orderBy('sort_order')])
            ->firstOrFail();

        return view('pages.galeri-detail', compact('gallery'));
    }
}
