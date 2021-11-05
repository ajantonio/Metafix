<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


use App\Models\Order;
use App\Models\HospitalAddress;
use App\Models\HospitalCity;

class User extends Authenticatable
{

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function hospital_city()
    {
        return $this->hasMany(Order::class);
    }

    public function hospital_addresses()
    {
        return $this->hasMany(Order::class);
    }

    public function status ()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }


    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'orthopedic_license_number',
        'username', 
        'password', 
        'status_id', 
        'email', 
        'contact_number', 
        'is_admin'
    
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
