<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('/pages/blog', [
            'title' => 'Blog',
            'articles' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('/pages/article', [
            'title' => 'Article',
            'articles' => $post
        ]);
    }
}
