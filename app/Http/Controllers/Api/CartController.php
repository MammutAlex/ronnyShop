<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 08.12.18
 * Time: 13:38
 */

namespace App\Http\Controllers\Api;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends BaseApiController
{

    public function index()
    {
        Cart::session(session()->getId());
        $content = Cart::getContent();
        return $content->toJson();
    }

    public function add(Product $product, Request $request)
    {
        Cart::session(session()->getId());
        Cart::add([
            'id' => $product['id'],
            'name' => $product['title'],
            'price' => $product['price'],
            'quantity' => $request['quantity'],
            'attributes' => [
                'url' => route('products.show', $product['url']),
                'img' => url($product['photo_url']),
                'id' => $product['url'],
            ]
        ]);
        return $this->index();
    }

    public function update(Product $product, Request $request)
    {
        Cart::session(session()->getId());
        Cart::update($product['id'], [
            'name' => $product['title'],
            'price' => $product['price'],
            'quantity' => [
                'relative' => false,
                'value' => $request['quantity']
            ],
        ]);
        return $this->index();
    }

    public function remove(int $product)
    {
        Cart::session(session()->getId())->remove($product);
        return $this->index();
    }
}
