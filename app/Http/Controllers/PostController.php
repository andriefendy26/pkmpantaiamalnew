<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $categories = PostCategory::withCount([
            'posts' => fn ($query) => $query->published(),
        ])->get();

        $activeCategory = $request->query('kategori');
        $search = $request->query('search');

        $posts = Post::published()
            ->with(['postCategory', 'tags'])
            ->when($activeCategory, function ($query) use ($activeCategory) {
                $query->whereHas('postCategory', fn ($q) => $q->where('slug', $activeCategory));
            })
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                        ->orWhere('content', 'like', "%{$search}%");
                });
            })
            ->orderByDesc('publishing_date')
            ->paginate(12)
            ->withQueryString();

        return view('pages.post', compact('posts', 'categories', 'activeCategory', 'search'));
    }

    public function show(string $slug)
    {
        $post = Post::published()
            ->where('slug', $slug)
            ->with(['postCategory', 'tags', 'author'])
            ->firstOrFail();

        $related = Post::published()
            ->where('id', '!=', $post->id)
            ->where('post_category_id', $post->post_category_id)
            ->limit(3)
            ->get();

        return view('pages.post-detail', compact('post', 'related'));
    }
}
