<?php

namespace App\Http\Controllers;

use App\Models\InstagramPostUrl;
use App\Models\Post;

class BerandaController extends Controller
{
    public function __invoke()
    {
        $instagramUrls = InstagramPostUrl::orderByDesc('id')->get();

        $latestPosts = Post::published()
            ->with(['postCategory', 'tags'])
            ->orderByDesc('publishing_date')
            ->limit(3)
            ->get();

        return view('pages.beranda', compact('instagramUrls', 'latestPosts'));
    }
}
