<?php

namespace App\Http\Controllers;

use Collective\Annotations\Routing\Annotations\Annotations\Get;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

/**
 * @Controller(prefix="cart")
 */
class CartsController extends Controller
{

    /**
     * @Get("/")
     */
    public function index()
    {
        $this->cdiscount->setCartId($this->request->session()->get('cartId', null));
        $cart = $this->cdiscount->getCart();
        if ($cart == null) {
            $cart_products = null;
            $products = null;
        } else {
            $cart_products = $this->cdiscount->getCollectionFromCart($cart);
            $products = $this->cdiscount->getProduct($cart_products->pluck('ProductId')->toArray());
        }

        return view('cart', compact('cart', 'cart_products', 'products'));
    }

    /**
     * @Get("/add")
     */
    public function add()
    {
        $this->cdiscount->pushToCart('MF841FA');
        $this->cdiscount->pushToCart('MJLT2FA');
        $this->request->session()->put('cartId', $this->cdiscount->getCartId());
        return redirect()->to('cart');
    }

}
