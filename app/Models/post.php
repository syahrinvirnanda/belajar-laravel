<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Syahrin Virnanda",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt aliquam, natus asperiores ab eveniet quasi odit praesentium rem voluptatem sit magni doloremque! Vitae consectetur corrupti non saepe, atque quo delectus maiores hic quae deleniti. Dolorem est ducimus delectus natus quibusdam! Ex culpa veniam laboriosam nesciunt ipsa et! Voluptate dolor magni nobis. Dolores perspiciatis nihil velit pariatur non praesentium laudantium nam quam eaque sit quos autem, enim a beatae sed facere nemo quia dignissimos aut qui nulla voluptate. Asperiores, mollitia nihil?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Suryani",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur saepe sed distinctio eius repellat rem veniam a? Dolorum eius, deserunt nihil dolore dolor consectetur illo quasi eos possimus hic delectus magnam debitis, repellendus temporibus! Velit illo maiores laudantium exercitationem. Sed, praesentium maxime rerum, aliquid doloremque quam iure nesciunt asperiores vel placeat vitae tempora voluptatum? Ipsam asperiores facere alias at iste earum perspiciatis aliquid placeat voluptas, illo, doloremque assumenda omnis accusamus perferendis accusantium fugiat necessitatibus voluptate inventore molestiae, vel delectus similique. Aliquid repellendus magni nesciunt, qui architecto reprehenderit quae deleniti voluptate suscipit ab dicta officiis sit at. Quis cum eos debitis."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
