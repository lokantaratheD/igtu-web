<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
{
    // Cari postingan berdasarkan slug yang aktif
    $post = \App\Models\Post::where('slug', $slug)
                ->where('is_active', true)
                ->firstOrFail();

    return view('posts_show', compact('post'));
}
}
