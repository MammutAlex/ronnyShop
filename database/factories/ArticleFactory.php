<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'text' => $faker->realText(5000),
        'published_at' => $faker->dateTime,
        'photo'=>''
    ];
})->state(App\Article::class, 'photo', function ($faker) {
    return [
        'photo' => substr($faker->image('public/storage', 400, 300), 15),
    ];
});
