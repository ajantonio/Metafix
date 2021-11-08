<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public const TYPE_PENDING = 1;
    public const TYPE_ACCEPTED = 2;
    public const TYPE_REJECTED = 3;
}
