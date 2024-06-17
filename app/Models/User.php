<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    
    // Fillable attributes for mass assignment
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'phone', 'address',
    ];

    // Hidden attributes (not visible in JSON responses)
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Attribute casting (email_verified_at as datetime)
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Mutator for setting hashed password
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
