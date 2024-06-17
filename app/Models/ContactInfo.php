<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $table = 'contact_infos'; // Specify the table name explicitly

    protected $fillable = [
        'email', 'phone_number', 'address',
    ];
}
