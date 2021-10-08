<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade;

class OrthopedicImplant extends Model
{
    protected $fillable = ['screw_types_id', 'screw_grades_id', 'screw_price', 'plate_types_id', 'plate_grades_id', 'plate_price'
    , 'diameter', 'length'];

    public function plate_grades(){
        return $this->hasMany(PlateGrade::class);
    }

    public function screw_grades(){
        return $this->hasMany(ScrewGrade::class);
    }

    use HasFactory;
}
