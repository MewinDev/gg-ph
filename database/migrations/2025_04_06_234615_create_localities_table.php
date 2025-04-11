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
        Schema::create('bangsamoro_parliamentary_positions', function (Blueprint $table) {
            $table->id();
            $table->string('bangpos_name');
            $table->timestamps();
        });
        
        Schema::create('local_positions', function (Blueprint $table) {
            $table->id();
            $table->string('locpos_name');
            $table->timestamps();
        });
        
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('reg_name');
            $table->timestamps();
        });
        
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->timestamps();
        });
        
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('prov_name');
            $table->timestamps();
        });
        
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('dis_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bangsamoro_parliamentary_positions');
        Schema::dropIfExists('regions');
        Schema::dropIfExists('local_positions');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('districts');
    }
};
