<?php

namespace App\Http\Controllers\OrthopedicDoctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrthopedicImplant;
use App\Models\OrthopedicTechnician;
use App\Models\Cart;
use App\Models\HospitalAddress;
use App\Models\HospitalCity;
use App\Models\Order;
use App\Mail\Sendmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;


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

    public function showCart(OrthopedicImplant $orthopedic_implant)
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
        $orthopedic_implant = OrthopedicImplant::find($orthopedic_implant->id);
        $stocks_left_in_the_inventory = $orthopedic_implant->quantity;

        $request->validate([
            'quantity' => 'required|numeric|min:1|max:100|lt:stocks_left_in_the_inventory'
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


        return response()->json($hospital_addresses);
    }

    public function generateQuotation(Request $request, OrthopedicImplant $orthopedic_implant)
    {
        $this->validate($request, [
            'surgery_date' => 'required',
            'surgery_time' => 'required',
            'hospital_city' => 'required',
            'hospital_address' => 'required'
        ]);

        // Produce a hash value that will serve as a reference id
        $str = rand();
        $reference_id = sha1($str);

        // Get one random, available orthopedic technician
        $orthopedic_technicians = OrthopedicTechnician::inRandomOrder()->where('status', 'On hold')->limit(1)->get();

        // Update the status of the assigned orthopedic technician to 'Working'. You can only update a collection if you use loop
        foreach ($orthopedic_technicians as $technician) {
            $technician->update(['status' => 'Working']);
        }

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }



        $request->user()->orders()->create([
            'cart' => serialize(session()->get('cart')),
            'reference_id' => $reference_id,
            'surgery_date' => $request->surgery_date,
            'surgery_time' => date('h:i:s', strtotime($request->start_reservation_time)),
            'hospital_cities_id' => $request->input('hospital_city'),
            'hospital_addresses_id' => $request->input('hospital_address'),
            'assigned_technician' => $orthopedic_technicians->first()->name,
            'grades_id' => $request->input('grade'),
            'technician_contact_number' => $orthopedic_technicians->first()->contact_number,
            'remark' => $request->remark
        ]);

        // Delete all the items in the cart after inserting its data into the database
        session()->forget('cart');
        $order = $request->user()->orders;
        $carts = $order->transform(function ($cart, $key) {
            return unserialize($cart->cart);
        });


        $carts = $carts->last();
        $user = $request->user();
        $orders = Order::with('hospital_cities', 'hospital_addresses', 'grades')->get()->last();

        // Reduce the quantity based on the number of order orthopedic implant by the doctor
        foreach ($carts->items as $cart) {
            $quantity_implant = DB::table('orthopedic_implants')->where('id', $cart['id'])->decrement('quantity', $cart['quantity']);
        }

        // Send email to the assigned orthopedic technician
        Mail::to($orthopedic_technicians->first()->email)->send(new Sendmail($carts, $orders, $user));



        return view('orthopedicDoctor.modules.OrderOrthopedicImplants.quotation', compact('carts', 'user', 'orders'));
    }
}
