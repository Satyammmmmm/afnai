<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_signup;
use Illuminate\Support\Facades\Hash;

class UserAuth extends Controller
{
    public function showusersignup()
    {
        return view("UserAuth.user_signup");
    }

    public function register(Request $request)
{
    $request->validate([
        'fullname' => 'required',
        'phone' => 'required|unique:users_signup',
        'citizenship_number' => 'required|unique:users_signup',
        'password' => 'required|min:6|confirmed',
    ]);

    $user = User_signup::create([
        'fullname' => $request->fullname,
        'phone' => $request->phone,
        'citizenship_number' => $request->citizenship_number,
        'password' => Hash::make($request->password),
    ]);

    // Redirect to user dashboard after successful registration
    return redirect('/user_dashboard');
}

}

