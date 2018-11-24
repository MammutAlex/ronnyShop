<?php

use Faker\Generator as Faker;

$factory->define(App\ProductCharacteristic::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'value' => $faker->word,
    ];
});
