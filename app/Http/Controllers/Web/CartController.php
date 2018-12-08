<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 08.12.18
 * Time: 16:19
 */

namespace App\Http\Controllers\Web;


use App\Http\Requests\CheckoutRequest;
use Cart;
use Telegram;

class CartController extends BaseWebController
{

    public function show()
    {
        return view('pages.cart.checkout');
    }

    public function store(CheckoutRequest $request)
    {
        $cart = Cart::session(session()->getId());
        $products = Cart::session(session()->getId())->getContent();
        Telegram::sendMessage([
            'chat_id' => config('telegram.shat'),
            'parse_mode' => 'HTML',
            'text' => view('telegram.CartStore', [
                'user' => $request,
                'products' => $products,
                'fullPrice' => $products->reduce(function ($sum, $product) {
                    return $sum + ($product['price'] * $product['quantity']);
                })
            ])->render(),
        ]);
        $cart->clear();
        return view('pages.cart.check', [
            'products' => $products,
            'fullPrice' => $products->reduce(function ($sum, $product) {
                return $sum + ($product['price'] * $product['quantity']);
            })
        ]);
    }
}
