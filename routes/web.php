<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;
use App\Models\User;
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
        'title' => "About Me",
        "name" => "Yusuf Al Qardhawi",
        "region" => "Natlan",
        "image" => "profile.png"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
// Halaman Single Post or Single Post Page
Route::get('posts/{post:slug}', [PostController::class, 'show']);
// Halaman Kategori Post atau Category Post Page
Route::get('/categories',function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
//Halaman menghubungkan relasi 1 tipe kategori ke banyak post >hasMany<
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category',[
        'title' => "Post by Categories : $category->name",
        'posts' => $category->posts->load('category','author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts',[
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('category','author'),
    ]);
});
