<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('address');
            $table->string('postcode');
            $table->string('idCode');
            $table->string('birthday');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('phones');
            $table->string('mobile');
            $table->string('home');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
