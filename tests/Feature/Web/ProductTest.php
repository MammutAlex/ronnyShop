<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 16.10.18
 * Time: 9:33
 */

namespace Tests\Feature\Web;


use App\Product;
use App\ProductCategory;
use App\ProductTag;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function testShowProductList()
    {
        $product = factory(Product::class)->create();
        $this->get(route('products.index', $product->url))
            ->assertStatus(200);
    }

    public function testShowProductListSearch()
    {
        $product = factory(Product::class)->create();
        $this->call('GET', route('products.index', $product->url), ['search' => 'search'])
            ->assertStatus(200);
    }

    public function testShowProductCategoryList()
    {
        $this->get(route('products.category', ProductCategory::inRandomOrder()->first()->url))
            ->assertStatus(200);
    }

    public function testShowProductTagList()
    {
        $this->get(route('products.tag', ProductTag::inRandomOrder()->first()->url))
            ->assertStatus(200);
    }

    public function testShowProductPage()
    {
        $product = factory(Product::class)->create();
        $this->get(route('products.show', $product->url))
            ->assertStatus(200);
    }
}
