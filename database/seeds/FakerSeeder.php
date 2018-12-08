<?php

use Illuminate\Database\Seeder;

class FakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ProductTag::class, 5)->create();
        factory(\App\Product::class, 10)->create();
        factory(\App\Article::class, 10)->create();
    }
}
