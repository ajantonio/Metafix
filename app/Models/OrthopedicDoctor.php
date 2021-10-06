<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class OrthopedicDoctor extends Model
{
    protected $fillable = ['name', 'status', 'email', 'contact_number'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
