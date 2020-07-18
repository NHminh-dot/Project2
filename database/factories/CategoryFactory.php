<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
       	'name' => $faker->streetName,
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'created_by' => App\Models\User::inRandomOrder()->value('id'),
        'topic_id' => App\Models\Topic::inRandomOrder()->value('id'),
    ];
});
