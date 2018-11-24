<?php

use Faker\Generator as Faker;

$factory->define(App\ProductCategory::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'photo' => substr($faker->image('public/storage', 1920, 1000), 15),
    ];
});
