<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
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


    public static function all()
    {
        return collect(self::$blog_posts);
    }

public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}