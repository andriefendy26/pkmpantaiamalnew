<?php

namespace App\Http\Controllers;

use App\Models\Fitur;

class FiturController extends Controller
{
    public function index()
    {
        $fiturs = Fitur::active()
            ->ordered()
            ->paginate(12);

        return view('pages.fitur', compact('fiturs'));
    }

    public function show(string $slug)
    {
        $fitur = Fitur::active()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('pages.fitur-detail', compact('fitur'));
    }
}
