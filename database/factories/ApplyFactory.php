<?php

use Faker\Generator as Faker;

$factory->define(\App\Apply::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'region' => $faker->city,
        'district' => $faker->streetAddress,
        'message' => $faker->text(1000),
        'status' => $faker->numberBetween(0, 1)
    ];
});
