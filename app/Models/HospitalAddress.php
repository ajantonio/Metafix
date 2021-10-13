<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HospitalCity;

class HospitalAddress extends Model
{
    protected $fillable = ['address', 'hospital_cities_id'];

    public function hospital_cities() {
        return $this->hasMany(HospitalCity::class);
    }

    use HasFactory;
}
