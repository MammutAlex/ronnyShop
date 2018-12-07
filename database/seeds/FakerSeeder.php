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
        factory(\App\ProductTag::class,20)->create();
        factory(\App\Product::class,80)->state('photo')->create();
    }
}
