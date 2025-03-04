<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rider_reg;
use App\Http\Controllers\UserAuth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/rider_registration',[rider_reg::class,'riderreg']);

Route::post('/rider_registration', [rider_reg::class, 'store'])->name('rider.store');

Route::get('/signup', [UserAuth::class, 'showusersignup'])->name('user.signup');
Route::post('/register', [UserAuth::class, 'register'])->name('user.register');

