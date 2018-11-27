<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ProductCategory::class)->create([
            'url' => 'analnye_probki',
            'title' => 'Анальные пробки',
        ]);
        factory(\App\ProductCategory::class)->create([
            'url' => 'vibratory',
            'title' => 'Вибраторы'
        ]);
        factory(\App\ProductCategory::class)->create([
            'url' => 'vakuumnye_stimulyatory',
            'title' => 'Вакуумные стимуляторы'
        ]);
        factory(\App\ProductCategory::class)->create([
            'url' => 'masturbatory',
            'title' => 'Мастурбаторы'
        ]);
        factory(\App\ProductCategory::class)->create([
            'url' => 'erekcionnye_kolca',
            'title' => 'Эрекционные кольца'
        ]);
        factory(\App\ProductCategory::class)->create([
            'url' => 'smazki',
            'title' => 'Смазки'
        ]);
        factory(\App\ProductCategory::class)->create([
            'url' => 'vse_dlya_prelyudii',
            'title' => 'Все для прелюдии'
        ]);
        factory(\App\ProductCategory::class)->create([
            'url' => 'vaginalnye_trenazhery',
            'title' => 'Вагинальные тренажеры'
        ]);
    }
}
