<?php

namespace App\Http\Controllers\OrthopedicDoctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class CheckHistoryTransactionController extends Controller
{
    public function index()
    {

        $orders = Order::get();

        return view('orthopedicDoctor.modules.CheckHistoryTransaction.home', compact('orders'));
    }

    public function show($id, Request $request)
    {
        $orders = Order::find($id);

        $item_orders = $request->user()->orders;

        $carts = $item_orders->transform(function ($cart, $key) {
            return unserialize($cart->cart);
        });

        dd($carts);
        return view('orthopedicDoctor.modules.CheckHistoryTransaction.view', compact('orders', 'carts'));
    }
}
