<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_signup extends Model
{
    use HasFactory;

    protected $table = 'users_signup'; // Ensure this matches your database table

    protected $fillable = [
        'fullname',
        'phone',
        'citizenship_number',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}

