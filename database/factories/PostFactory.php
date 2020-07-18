<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->company,
        'content' => $faker->jobTitle,
        'created_by' => App\Models\User::inRandomOrder()->value('id'),
        'category_id' => App\Models\Category::inRandomOrder()->value('id'),
        // 'status' => $faker->randomDigitNot(0,2,3,4,5,6,7,8,9),
    ];
});
