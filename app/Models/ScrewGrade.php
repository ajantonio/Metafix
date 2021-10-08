<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrewGrade extends Model
{
    protected $fillable = ['grade_name'];

    use HasFactory;
}
