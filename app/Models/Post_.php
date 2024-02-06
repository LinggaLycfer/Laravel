<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = 
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Lingga Saputra",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam sunt veritatis, dolor corrupti vero libero natus et, maxime est aliquam sed enim in quasi? Deleniti ratione earum aperiam cupiditate expedita debitis corrupti perspiciatis dolores autem ad, aliquam delectus temporibus? Quis asperiores doloribus aperiam distinctio, cum reiciendis voluptatem minus soluta enim laboriosam et omnis itaque voluptatum saepe magni commodi odio quo dolorem ipsum labore inventore eaque voluptates provident natus. Nostrum iusto, placeat et enim odit non provident aperiam voluptas corporis similique.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Adnan Ahmad Zanuar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis beatae, corrupti architecto unde cupiditate eum esse aliquam tenetur similique accusamus voluptates cumque autem mollitia, deleniti nemo iste, nulla dolores sapiente optio. Autem culpa molestias labore cum, a explicabo eligendi at expedita soluta fugiat similique ut harum iure itaque modi reiciendis rem omnis consequatur voluptas commodi? Obcaecati, cum? At quas unde, iure dolorum maiores accusamus, esse blanditiis officiis illum, cumque enim incidunt molestias eum ipsam consequuntur vero corrupti deleniti! Incidunt alias nostrum, cum fugit sunt pariatur iste perspiciatis natus odio qui, deserunt quo, sint odit commodi! Illum itaque blanditiis similique inventore?",
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
