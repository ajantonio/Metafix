<?php

namespace App\Http\Controllers\OrthopedicDoctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrthopedicImplant;
use App\Models\Cart;
use App\Models\HospitalAddress;
use App\Models\HospitalCity;

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

    public function updateCart(Request $request, OrthopedicImplant $orthopedic_implant)
    {
        $request->validate([
            'quantity' => 'required|numeric|min:1'
        ]);


        $cart = new Cart(session()->get('cart'));
        $cart->updateQty($orthopedic_implant->id, $request->quantity);
        session()->put('cart', $cart);

        return redirect()->back()->with('message', 'Item quantity updated successfully');
    }

    public function removeCart(OrthopedicImplant $orthopedic_implant)
    {
        $cart = new Cart(session()->get('cart'));
        $cart->remove($orthopedic_implant->id);
        if ($cart->totalQty <= 0) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('message', 'Item removed successfully');
    }

    public function checkout($amount, HospitalAddress $hospital_addresses, HospitalCity $hospital_cities)
    {
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }

        $hospital_addresses = HospitalAddress::with('hospital_city')
            ->get();
        $hospital_cities = HospitalCity::get();

        return view('orthopedicDoctor.modules.OrderOrthopedicImplants.checkout', compact('amount', 'hospital_addresses', 'hospital_cities', 'cart'));
    }

    public function loadHospitalAddress(Request $request, $id)
    {
        $hospital_addresses = HospitalAddress::where('hospital_cities_id', $id)
            ->pluck('address', 'id');


        // It works as expected
        return response()->json($hospital_addresses);
    }
}
