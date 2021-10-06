<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Administrator extends Model
{
    protected $fillable = ['name'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
