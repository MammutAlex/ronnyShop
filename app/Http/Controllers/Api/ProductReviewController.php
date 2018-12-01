<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 01.12.18
 * Time: 11:59
 */

namespace App\Http\Controllers\Api;

use App\Product;
use App\Http\Resources\ProductReview as ReviewResource;

class ProductReviewController extends BaseApiController
{
    public function show(Product $review)
    {
        return ReviewResource::collection($review->reviews()->get());
    }

    public function store(ProductReviewRequest $request)
    {

    }
}
