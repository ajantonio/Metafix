<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade;
use App\Models\OrthopedicImplant;
use App\Models\User;
use App\Models\OrthopedicDoctor;
use App\Models\HospitalAddress;
use App\Models\HospitalCity;
use App\Models\OrthopedicTechnician;


class Order extends Model
{
    protected $fillable = ['doctor_name', 'plate_qty', 'screw_qty', 'surgery_date', 'surgery_time', 'total_price', 'orthopedic_technicians_id'
    , 'users_id', 'users_orthopedic_doctors_id', 'orthopedic_implants_id', 'orthopedic_implants_grades_id', 'hospital_cities_id', 'hospital_cities_hospital_addresses_id'];


    public function users() {
        return $this->hasMany(User::class);
    }

    public function orthopedic_implants() {
        return $this->hasMany(OrthopedicImplant::class);
    }

    public function grades() {
        return $this->hasMany(Grade::class);
    }

    public function hospital_cities() {
        return $this->hasMany(HospitalCity::class);
    }

    public function hospital_addresses() {
        return $this->hasMany(HospitalAddress::class);
    }

    public function orthopedic_doctors() {
        return $this->hasMany(OrthopedicDoctor::class);
    }

    public function orthopedic_technicians() {
        return $this->hasMany(OrthopedicTechnician::class);
    }

    use HasFactory;
}
