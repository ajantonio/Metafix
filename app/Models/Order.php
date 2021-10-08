<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrthopedicImplant;
use App\Models\User;
use App\Models\HospitalAddress;
use App\Models\HospitalCity;
use App\Models\OrthopedicTechnician;
use App\Models\PlateGrade;
use App\Models\ScrewGrade;
use App\Models\PlateType;
use App\Models\ScrewType;

class Order extends Model
{
    protected $fillable = ['users_id', 'orthopedic_implants_plate_types_id', 'orthopedic_implants_plate_grades_id', 'plate_qty', 
    'orthopedic_implants_screw_types_id', 'orthopedic_implants_screw_grades_id', 'screw_qty', 'surgery_date', 'surgery_time', 'hospital_addresses_id',
    'hospital_addresses_hospital_cities_id', 'total_price', 'orthopedic_technicians_id', 'orthopedic_implants_id'];


    public function users() {
        return $this->hasMany(User::class);
    }

    public function orthopedic_implants() {
        return $this->hasMany(OrthopedicImplant::class);
    }

    public function plate_grades() {
        return $this->hasMany(PlateGrade::class, 'orthopedic_implants_plate_grades_id');
    }

    public function screw_grades() {
        return $this->hasMany(ScrewGrade::class, 'orthopedic_implants_screw_grades_id');
    }

    public function plate_types() {
        return $this->hasMany(PlateType::class, 'orthopedic_implants_plate_types_id');
    }

    public function screw_types() {
        return $this->hasMany(ScrewType::class, 'orthopedic_implants_screw_types_id');
    }

    public function hospital_cities() {
        return $this->hasMany(HospitalCity::class, 'hospital_addresses_hospital_cities_id');
    }

    public function hospital_addresses() {
        return $this->hasMany(HospitalAddress::class, 'hospital_addresses_id');
    }


    public function orthopedic_technicians() {
        return $this->hasMany(OrthopedicTechnician::class);
    }

    use HasFactory;
}
