<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::published()
            ->with(['category', 'tags'])
            ->orderByDesc('published_at')
            ->paginate(12);

        return view('pages.berita', compact('beritas'));
    }

    public function show(string $slug)
    {
        $berita = Berita::published()
            ->where('slug', $slug)
            ->with(['category', 'tags', 'author'])
            ->firstOrFail();

        $related = Berita::published()
            ->where('id', '!=', $berita->id)
            ->where(function ($query) use ($berita) {
                $query->where('category_id', $berita->category_id)
                    ->orWhereHas('tags', fn ($q) => $q->whereIn('tags.id', $berita->tags->pluck('id')));
            })
            ->limit(3)
            ->get();

        return view('pages.berita-detail', compact('berita', 'related'));
    }
}
