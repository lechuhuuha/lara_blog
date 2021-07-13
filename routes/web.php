<?php

use Illuminate\Support\Facades\Route;
use App\Category;
use App\Http\Controllers\PostsController;
use App\User;
use App\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostsController::class, 'index'])->name('posts.show');

Route::get('posts/{post}', [PostsController::class, 'show'])->where('post', '[A-z0-9_\-]+')->name('post.show');

// Route::get('categories/{category}', function (Category $category) {
//     // dd($category);
//     return view('posts', [
//         'posts' => $category->posts,
//         'currentCategory' => $category,
//         'categories' => Category::latest()->get()

//     ]);
// })->name('category');

Route::get('authors/{author}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::latest()->get()

    ]);
});
// Route::fallback(function () {
//     return abort(404);
// });
