<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class OrthopedicTechnician extends Model
{
    protected $fillable = ['image', 'status', 'name', 'contact_number', 'email'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    use HasFactory;
}
