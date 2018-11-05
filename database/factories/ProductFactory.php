<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'text' => $faker->realText(5000),
        'description' => $faker->realText(200),

        'price' => $faker->numberBetween(100, 8000),

        'photo' => '',
        'images' => [],

        'show' => true,
    ];
})->state(App\Product::class, 'photo', function ($faker) {
    return [
        'photo' => substr($faker->image('public/storage', 400, 300), 15),
        'images' => [
            substr($faker->image('public/storage', 400, 300), 15),
            substr($faker->image('public/storage', 400, 300), 15)
        ],
    ];
});

