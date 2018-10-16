<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 16.10.18
 * Time: 9:33
 */

namespace Tests\Feature\Web;


use Tests\TestCase;

class ProductTest extends TestCase
{
    public function testShowProductListPage()
    {
        $this->get(route('products.index'))
            ->assertStatus(200);
    }

    public function testShowProductPage()
    {
        $this->get(route('products.show',1))
            ->assertStatus(200);
    }
}
