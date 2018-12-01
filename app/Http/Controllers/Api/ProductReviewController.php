<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 01.12.18
 * Time: 11:59
 */

namespace App\Http\Controllers\Api;

use App\Http\Requests\ProductReviewRequest;
use App\Product;
use App\Http\Resources\ProductReview as ReviewResource;

class ProductReviewController extends BaseApiController
{
    public function index(Product $product)
    {
        return ReviewResource::collection($product->reviews()->get());
    }

    public function store(ProductReviewRequest $request, Product $product)
    {
        return new ReviewResource($product->reviews()->create($request->all()));
    }
}
