<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrthopedicImplant;

class Grade extends Model
{
    protected $fillable = ['grade_name'];

    public function orthopedic_implant(){
        return $this->belongsTo(OrthopedicImplant::class);
    }

    use HasFactory;
}
