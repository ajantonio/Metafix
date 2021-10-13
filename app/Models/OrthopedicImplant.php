<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ScrewGrade;
use App\Models\PlateGrade;
use App\Models\ScrewType;
use App\Models\PlateType;

class OrthopedicImplant extends Model
{
    protected $fillable = ['screw_types_id', 'screw_grades_id', 'screw_price', 'plate_types_id', 'plate_grades_id', 'plate_price'
    , 'diameter', 'length'];

    public function plate_grades(){
        return $this->hasMany(PlateGrade::class, 'id', 'plate_grades_id');
    }

    public function screw_grades(){
        return $this->hasMany(ScrewGrade::class, 'id', 'screw_grades_id');
    }

    public function screw_types(){
        return $this->hasMany(ScrewType::class, 'id', 'screw_types_id');
    }

    public function plate_types(){
        return $this->hasMany(PlateType::class, 'id', 'plate_types_id');
    }

    use HasFactory;
}
