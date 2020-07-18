<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {
    return [
        'name' => $faker->cityPrefix,
        'description' => $faker->text,
        'created_by' => App\Models\User::inRandomOrder()->value('id'),
    ];
});
