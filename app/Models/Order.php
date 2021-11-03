<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\HospitalCity;
use App\Models\HospitalAddress;

class Order extends Model
{
    protected $fillable = ['users_id', 'cart', 'reference_id', 'surgery_time', 'surgery_date', 'hospital_cities_id', 'hospital_addresses_id'];


    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function hospital_cities()
    {
        return $this->hasMany(HospitalCity::class, 'id', 'hospital_cities_id');
    }

    public function hospital_addresses()
    {
        return $this->hasMany(HospitalAddress::class, 'id', 'hospital_addresses_id');
    }

    use HasFactory;
}
