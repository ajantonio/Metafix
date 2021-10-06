<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalAddress extends Model
{
    protected $fillable = ['address', 'hospital_cities_id'];

    use HasFactory;
}
