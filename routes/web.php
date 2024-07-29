<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => "about",
        "nama" => "Evi Listianingsih",
        "email" => "evilistianingsih10@gmail.com",
        "image" => "10.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Evi Listianingsih",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi optio voluptatibus aliquam adipisci et expedita necessitatibus possimus ad reprehenderit illum fuga, rerum est ullam voluptatem nemo at, saepe inventore. Aperiam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Septi Fitria Munawaroh",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi optio voluptatibus aliquam adipisci et expedita necessitatibus possimus ad reprehenderit illum fuga, rerum est ullam voluptatem nemo at, saepe inventore. Aperiam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quidem labore sint, ullam officiis omnis ut quas harum? Excepturi quidem aperiam numquam. Expedita ducimus, veritatis sit quisquam nulla sed placeat!"
        ],
    
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Evi Listianingsih",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi optio voluptatibus aliquam adipisci et expedita necessitatibus possimus ad reprehenderit illum fuga, rerum est ullam voluptatem nemo at, saepe inventore. Aperiam."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Septi Fitria Munawaroh",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi optio voluptatibus aliquam adipisci et expedita necessitatibus possimus ad reprehenderit illum fuga, rerum est ullam voluptatem nemo at, saepe inventore. Aperiam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quidem labore sint, ullam officiis omnis ut quas harum? Excepturi quidem aperiam numquam. Expedita ducimus, veritatis sit quisquam nulla sed placeat!"
        ],
    
    ];

    $new_post = [];
    foreach ($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }


    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});