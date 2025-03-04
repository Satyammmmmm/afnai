<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('users_signup', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('phone')->unique();
            $table->string('citizenship_number')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users_signup');
    }
};
