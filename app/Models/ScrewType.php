<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrewType extends Model
{
    protected $fillable = ['type', 'image'];

    use HasFactory;
}
