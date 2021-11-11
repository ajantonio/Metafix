<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade;
use App\Models\ScrewType;
use App\Models\PlateType;

class OrthopedicImplant extends Model
{
    protected $fillable = [
        'name', 'image', 'description', 'screw_types_id', 'price', 'quantity', 'plate_types_id', 'grades_id', 'diameter', 'length'
    ];

    public function grades()
    {
        return $this->hasMany(Grade::class, 'id', 'grades_id');
    }

    public function screw_types()
    {
        return $this->hasMany(ScrewType::class, 'id', 'screw_types_id');
    }

    public function plate_types()
    {
        return $this->hasMany(PlateType::class, 'id', 'plate_types_id');
    }

    use HasFactory;
}
