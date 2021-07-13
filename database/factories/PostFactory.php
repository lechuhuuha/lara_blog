<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'category_id' => function () {
            return factory(Category::class)->create()->id;
        },
        'title' => $faker->sentence(),
        'slug' => $faker->slug(),
        'excerpt' => '<p>' . implode('<p></p>', $faker->paragraphs(2))  . '</p>',
        'body' => '<p>' . implode('<p></p>', $faker->paragraphs(6))  . '</p>',
    ];
});
