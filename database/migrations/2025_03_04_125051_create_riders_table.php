<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('riders', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->enum('vehicle_type', ['Bike', 'Car']);
            $table->string('vehicle_number');
            $table->string('vehicle_registration'); // File path
            $table->string('driver_license'); // File path
            $table->string('phone_number');
            $table->string('email_address')->unique();
            $table->string('profile_image'); // File path
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riders');
    }
};

