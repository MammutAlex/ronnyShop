<?php

namespace App\Http\Controllers\Web;

use App\ProductTag;
use App\SearchModel;
use App\Product;
use App\ProductCategory;

class ProductController extends BaseWebController
{
    public function index()
    {
        return view('pages.product.index', [
            'categories' => ProductCategory::get(),
            'products' => SearchModel::buildSearchQuery(
                Product::where('show', true), request('search')
            )->paginate(9),
        ]);
    }

    public function tag(ProductTag $tag)
    {
        return view('pages.product.index', [
            'activeTag' => $tag,
            'categories' => ProductCategory::get(),
            'products' => SearchModel::buildSearchQuery(
                Product::whereHas('tags', function ($query) use ($tag) {
                    $query->where('id', $tag->id);
                })->where('show', true), request('search')
            )->paginate(9),
        ]);
    }

    public function category(string $category)
    {
        $activeCategory = ProductCategory::where('url', $category)->firstOrFail();
        return view('pages.product.index', [
            'activeCategory' => $activeCategory,
            'categories' => ProductCategory::get(),
            'products' => SearchModel::buildSearchQuery(
                Product::where('category_id', $activeCategory->id)->where('show', true), request('search')
            )->paginate(9),
        ]);
    }

    public function show(Product $product)
    {
        return view('pages.product.show', [
            'product' => $product
        ]);
    }
}
