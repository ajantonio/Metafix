<?php

namespace App\Http\Controllers\OrthopedicDoctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrthopedicImplant;
use App\Models\Cart;

class CartController extends Controller
{
    public function addToCart(OrthopedicImplant $orthopedic_implant)
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }

        $cart->add($orthopedic_implant);

        session()->put('cart', $cart);
        return redirect()->back()->with('message', 'Added to cart successfully');
    }

    public function showCart()
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }
        return view('orthopedicDoctor.modules.ViewCart.cart', compact('cart'));
    }
}
