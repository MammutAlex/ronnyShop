<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'category_id' => \App\ProductCategory::inRandomOrder()->first()->id,

        'url' => $faker->slug,
        'title' => $faker->sentence,
        'sku' => $faker->randomNumber,
        'short_description' => $faker->realText(200),
        'description' => $faker->realText(5000),

        'price' => $faker->numberBetween(100, 8000),

        'photo' => '',
        'images' => [],

        'show' => true,
    ];
})->afterCreating(App\Product::class, function ($product) {
    factory(\App\ProductCharacteristic::class, 5)->create([
        'product_id' => $product['id']
    ]);
})->afterCreating(App\Product::class, function ($product) {
    factory(\App\ProductReview::class, 5)->create([
        'product_id' => $product['id']
    ]);
})->state(App\Product::class, 'photo', function ($faker) {
    return [
        'photo' => substr($faker->image('public/storage', 400, 300), 15),
        'images' => [
            substr($faker->image('public/storage', 400, 300), 15),
            substr($faker->image('public/storage', 400, 300), 15)
        ],
    ];
});

