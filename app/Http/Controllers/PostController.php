<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published()
            ->with(['postCategory', 'tags'])
            ->orderByDesc('publishing_date')
            ->paginate(12);

        $categories = PostCategory::all();

        return view('pages.post', compact('posts', 'categories'));
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
