<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Grade;

class OrthopedicImplant extends Model
{
    protected $fillable = ['implant_name', 'serial_num', 'price', 'grades_id'];

    public function grades(){
        return $this->hasMany(Grade::class);
    }

    use HasFactory;
}
