<?php

use Faker\Generator as Faker;

$factory->define(App\ArticleCategory::class, function (Faker $faker) {
    return [
        'url' => $faker->slug,
        'title' => $faker->sentence,
    ];
});
