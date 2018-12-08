<?php

use Illuminate\Database\Seeder;

class ArticleCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ArticleCategory::class)->create([
            'url' => 'devajsy',
            'title' => 'Девайсы',
        ]);
        factory(\App\ArticleCategory::class)->create([
            'url' => 'rashodniki',
            'title' => 'Расходники',
        ]);
        factory(\App\ArticleCategory::class)->create([
            'url' => 'smazki',
            'title' => 'Смазки',
        ]);
        factory(\App\ArticleCategory::class)->create([
            'url' => 'seks_prosvet',
            'title' => 'Секс просвет',
        ]);
        factory(\App\ArticleCategory::class)->create([
            'url' => 'refleksiya',
            'title' => 'Рефлексия',
        ]);
        factory(\App\ArticleCategory::class)->create([
            'url' => 'ronni-rassuzhdaet',
            'title' => 'Ронни рассуждает',
        ]);
    }
}
