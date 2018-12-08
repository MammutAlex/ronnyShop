<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 01.12.18
 * Time: 13:58
 */

namespace Tests\Feature\Api;

use App\Product;

class ProductReviewTest extends ApiTestCase
{
    public function testGetAllReviews()
    {
        $product = factory(Product::class)->create();
        $this->json('GET', route('api.product.review.show', $product->url))
            ->assertStatus(200);
    }

    public function testCreateReview()
    {
        $product = factory(Product::class)->create();
        $this->json('POST',route('api.product.review.store', $product->url), [
            'name' => 'name',
            'email' => 'test@test.com',
            'text' => 'test',
        ])->assertStatus(201);
    }
}
