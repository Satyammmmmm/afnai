<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rider;

class rider_reg extends Controller
{
    public function riderreg()
    {
        return view("rider.riderReg");
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'vehicleType' => 'required|in:Bike,Car',
            'vehicleNumber' => 'required|string|max:255',
            'vehicleRegistration' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'driverLicense' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'phoneNumber' => 'required|string|max:15',
            'emailAddress' => 'required|email|unique:riders,email_address',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $vehicleRegPath = $request->file('vehicleRegistration')->store('rider', 'public');
        $driverLicensePath = $request->file('driverLicense')->store('rider', 'public');
        $profileImagePath = $request->file('image')->store('rider', 'public');

        Rider::create([
            'full_name' => $request->fullName,
            'vehicle_type' => $request->vehicleType,
            'vehicle_number' => $request->vehicleNumber,
            'vehicle_registration' => $vehicleRegPath,
            'driver_license' => $driverLicensePath,
            'phone_number' => $request->phoneNumber,
            'email_address' => $request->emailAddress,
            'profile_image' => $profileImagePath,
        ]);

        return back()->with('success', 'Rider registered successfully!');
    }
}
