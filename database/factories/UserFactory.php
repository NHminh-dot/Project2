<?php

// use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function () {
	$faker = Faker\Factory::create('vi_VN');
    return [	
        'username' => $faker->name,
        'login_name' => $faker->userName,
    	'password' => $faker->password,
    	'email' => $faker->freeEmail,
    	'date_of_birth' => $faker->dateTimeBetween('-30 years', '-18 years'),
    	'biography' => $faker->text,
    	'picture' => $faker->imageUrl(200, 200),
    	'gender' => $faker->numberBetween($min = 0, $max = 2),
    	'role_id' => App\Models\Role::inRandomOrder()->value('id'),
    ];
});
