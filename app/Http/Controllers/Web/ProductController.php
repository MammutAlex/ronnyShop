<?php

namespace App\Http\Controllers\Web;

class ProductController extends BaseWebController
{
    public function index()
    {
        return view('pages.product.index');
    }

    public function show($id)
    {
        return view('pages.product.show');
    }
}
