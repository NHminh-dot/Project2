<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text,
        'post_id' => App\Models\Post::inRandomOrder()->value('id'),
        'created_by' => App\Models\User::inRandomOrder()->value('id'),
    ];
});
