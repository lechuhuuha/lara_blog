<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view(
            'posts.index',
            [
                'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get(),
                'categories' => Category::all(),
                'currentCategory' => Category::where('slug', request('category'))->first()
            ]
        );
    }
    public function show(Post $post)
    {
        return view(
            'posts.show',
            ['post' => $post]
        );
    }
    // public function getPosts()
    // {
    //     $post = Post::latest()->filter()->get();

    //     return $post;
    // }
}
