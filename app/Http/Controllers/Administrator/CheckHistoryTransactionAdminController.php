<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;

class CheckHistoryTransactionAdminController extends Controller
{
    public function index()
    {
        $orders = Order::get();
        return view('admin.modules.CheckHistoryTransaction.home', compact('orders'));
    }

    public function show($id, Request $request)
    {
        $orders = Order::find($id);
        $doctor = User::get()->where('id', $orders->id);

        // $carts = $orders->transform(function ($cart, $key) {
        //     return unserialize($cart->cart);
        // });

        $carts = unserialize($orders->cart);

        return view('admin.modules.CheckHistoryTransaction.view', compact('orders', 'carts', 'doctor'));
    }
}
