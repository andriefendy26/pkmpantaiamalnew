<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::published()
            ->with(['category', 'tags'])
            ->orderByDesc('published_at')
            ->paginate(12);

        return view('pages.artikel', compact('artikels'));
    }

    public function show(string $slug)
    {
        $artikel = Artikel::published()
            ->where('slug', $slug)
            ->with(['category', 'tags', 'author'])
            ->firstOrFail();

        $related = Artikel::published()
            ->where('id', '!=', $artikel->id)
            ->where(function ($query) use ($artikel) {
                $query->where('category_id', $artikel->category_id)
                    ->orWhereHas('tags', fn ($q) => $q->whereIn('tags.id', $artikel->tags->pluck('id')));
            })
            ->limit(3)
            ->get();

        return view('pages.artikel-detail', compact('artikel', 'related'));
    }
}
