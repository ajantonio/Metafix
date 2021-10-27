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
            'quantity' => 0,
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
        $this->items[$orthopedic_implant->id]['quantity'] += 1;
    }

    public function updateQty($id, $quantity)
    {
        $this->totalQty -= $this->items[$id]['quantity'];
        $this->totalPrice -= $this->items[$id]['price'] * $this->items[$id]['quantity'];

        // add the item with new qty
        $this->items[$id]['quantity'] = $quantity;
        $this->totalQty += $quantity;
        $this->totalPrice += $this->items[$id]['price'] * $quantity;
    }

    public function remove($id)
    {
        if (array_key_exists($id, $this->items)) {
            $this->totalQty -= $this->items[$id]['quantity'];
            $this->totalPrice -= $this->items[$id]['quantity'] * $this->items[$id]['price'];
            unset($this->items[$id]);
        }
    }
}
