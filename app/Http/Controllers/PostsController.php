<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view(
            'posts',
            [
                'posts' => Post::latest()->filter(request(['search', 'category']))->get(),
                'categories' => Category::latest()->get(),
                'currentCategory'=>Category::where('slug',request('category'))->first()
            ]
        );
    }
    public function show(Post $post)
    {
        return view(
            'post',
            ['post' => $post]
        );
    }
    // public function getPosts()
    // {
    //     $post = Post::latest()->filter()->get();

    //     return $post;
    // }
}
