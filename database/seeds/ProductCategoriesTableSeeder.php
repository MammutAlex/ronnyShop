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
            'title' => 'Анальные пробки'
        ]);
        factory(\App\ProductCategory::class)->create([
            'title' => 'Вибраторы'
        ]);
        factory(\App\ProductCategory::class)->create([
            'title' => 'Вакуумные стимуляторы'
        ]);
        factory(\App\ProductCategory::class)->create([
            'title' => 'Мастурбаторы'
        ]);
        factory(\App\ProductCategory::class)->create([
            'title' => 'Эрекционные кольца'
        ]);
        factory(\App\ProductCategory::class)->create([
            'title' => 'Смазки'
        ]);
        factory(\App\ProductCategory::class)->create([
            'title' => 'Все для прелюдии'
        ]);
        factory(\App\ProductCategory::class)->create([
            'title' => 'Вагинальные тренажеры'
        ]);
    }
}
