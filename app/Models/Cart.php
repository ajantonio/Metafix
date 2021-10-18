<?php

namespace App\Models;

class Cart
{
    public $items = [];
    public $totalQty;
    public $totalPrice;

    public function __construct($cart = null)
    {
        if ($cart) {
            $this->items = $cart->items;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQty = $cart->totalQty;
        } else {
            $this->items = [];
            $this->totalQty = 0;
            $this->totalPrice = 0;
        }
    }

    public function add($orthopedic_implant)
    {
        $item = [
            'id' => $orthopedic_implant->id,
            'name' => $orthopedic_implant->name,
            'price' => $orthopedic_implant->price,
            'qty' => 0,
            'image' => $orthopedic_implant->image
        ];

        if (!array_key_exists($orthopedic_implant->id, $this->items)) {
            $this->items[$orthopedic_implant->id] = $item;
            $this->totalQty += 1;
            $this->totalPrice += $orthopedic_implant->price;
        } else {
            $this->totalQty += 1;
            $this->totalPrice += $orthopedic_implant->price;
        }
        $this->items[$orthopedic_implant->id]['qty'] += 1;
    }
}
