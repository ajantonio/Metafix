<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HospitalAddress;

class HospitalCity extends Model
{

    protected $fillable = ['city'];

    public function hospital_address()
    {
        return $this->hasMany(HospitalAddress::class);
    }

    use HasFactory;
}
