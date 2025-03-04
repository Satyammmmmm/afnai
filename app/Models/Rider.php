<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'vehicle_type',
        'vehicle_number',
        'vehicle_registration',
        'driver_license',
        'phone_number',
        'email_address',
        'profile_image',
    ];
}
