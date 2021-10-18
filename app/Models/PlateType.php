<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrthopedicImplant;

class PlateType extends Model
{
    protected $fillable = ['type'];



    use HasFactory;
}
