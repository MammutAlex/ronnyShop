<?php

use Faker\Generator as Faker;

$factory->define(App\ProductReview::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'text' => $faker->text(500),
        'stars' => $faker->numberBetween(2, 5),
    ];
});
