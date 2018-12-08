<?php

use Faker\Generator as Faker;

$factory->define(App\ProductCategory::class, function (Faker $faker) {
    return [
        'url' => $faker->slug,
        'title' => $faker->sentence,
        'photo' => '',
    ];
})->state(App\Product::class, 'photo', function ($faker) {
    return [
        'photo' => substr($faker->image('public/storage', 1920, 1000), 15),
    ];
});
