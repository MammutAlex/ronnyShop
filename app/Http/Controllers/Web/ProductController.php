<?php

namespace App\Http\Controllers\Web;

use App\Product;

class ProductController extends BaseWebController
{
    public function index(Product $products)
    {
        return view('pages.product.index', [
            'products' => $products->where('show', true)->paginate(9)
        ]);
    }

    public function show(Product $product)
    {
        return view('pages.product.show', [
            'product' => $product
        ]);
    }
}
