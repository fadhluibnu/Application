<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            'title' => "Judul Posts Pertama",
            'slug' => "judul-post-pertama",
            'author' => "Fadhlu Ibnu",
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, ab ea iusto cupiditate voluptatum id suscipit provident ad, labore laboriosam dignissimos consectetur sit voluptatem omnis sint! Perspiciatis suscipit blanditiis reprehenderit sed obcaecati, sit doloribus, eligendi nostrum maxime at cupiditate molestiae voluptate nihil id, temporibus soluta maiores dolorem non ratione expedita nesciunt. Nisi odio rem vero iure dolore optio, rerum laborum? Nemo, maiores rem. Error, quibusdam. Perferendis veniam, iure iusto impedit placeat modi deleniti labore officiis omnis nemo, porro animi ducimus.'
        ],
        [
            'title' => "Judul Posts Kedua",
            'slug' => "judul-post-Kedua",
            'author' => "Fadhlu Ibnu",
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt, ab ea iusto cupiditate voluptatum idmaxime at cupiditate molestiae voluptate nihil id, temporibus soluta maiores dolorem non ratione expedita nesciunt. Nisi odio rem vero iure dolore optio, rerum laborum? Nemo, maiores rem. Error, quibusdam. Perferendis veniam, iure iusto impedit placeat modi deleniti labore officiis omnis nemo, porro animi ducimus.'
        ]
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
