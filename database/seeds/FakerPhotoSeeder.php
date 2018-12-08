<?php

use Illuminate\Database\Seeder;

class FakerPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ProductTag::class,20)->create();
        factory(\App\Product::class,30)->state('photo')->create();
        factory(\App\Article::class,30)->state('photo')->create();
    }
}
