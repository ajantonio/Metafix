<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlateGrade extends Model
{
    protected $fillable = ['grade_name'];

    use HasFactory;
}
