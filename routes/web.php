<?php

use App\Models\Categories;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

route::get('posts/{post:slug}', function (Post $post) {

    // $post = Post::find($id);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

route::get('authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) . ' Posts by ' . $user->name, 'posts' => $user->posts]);
});

route::get('categories/{category:slug}', function (Categories $category) {
    return view('posts', ['title' => 'Posts in Category: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'HEYLUCK', 'title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
