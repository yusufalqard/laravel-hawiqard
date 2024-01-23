<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        "name" => "Sylvia",
        "region" => "Natlan",
        "image" => "profile.png"
    ]);
});

Route::get('/posts', function () {
    $blog_posts = [
        [
            "title" => "Judul Post",
            "slug" => "FirstPost",
            "author" => "Hawiqard",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, obcaecati eius quos deserunt illo quo officia cumque est consectetur blanditiis distinctio vitae, eum ducimus amet. A molestias in nisi voluptatem?"
        ],
        [
            "title" => "Random Post",
            "slug" => "SecondPost",
            "author" => "HRendr",
            "body" => "Wawwww?"
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman Single Post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post",
            "slug" => "FirstPost",
            "author" => "Hawiqard",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, obcaecati eius quos deserunt illo quo officia cumque est consectetur blanditiis distinctio vitae, eum ducimus amet. A molestias in nisi voluptatem?"
        ],
        [
            "title" => "Random Post",
            "slug" => "SecondPost",
            "author" => "HRendr",
            "body" => "Wawwww?"
        ]
    ];
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

