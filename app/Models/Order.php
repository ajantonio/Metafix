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
    protected $fillable = ['users_id', 'cart'];


    public function users()
    {
        return $this->hasMany(User::class);
    }

    use HasFactory;
}
