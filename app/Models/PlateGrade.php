<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrthopedicImplant;

class PlateGrade extends Model
{
    protected $fillable = ['grade_name'];

    public function orthopedic_implants() {
        return $this->belongsTo(OrthopedicImplant::class);
    }

    use HasFactory;
}
