<?php

use Faker\Generator as Faker;

$factory->define(App\ProductTag::class, function (Faker $faker) {
    return [
        'url' => $faker->slug,
        'title' => $faker->word,
    ];
});
