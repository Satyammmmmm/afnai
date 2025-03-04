<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rider_reg;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rider_registration',[rider_reg::class,'riderreg']);

Route::post('/rider_registration', [rider_reg::class, 'store'])->name('rider.store');
