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
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('pos_name');
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
        Schema::dropIfExists('regions');
        Schema::dropIfExists('local_positions');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('districts');
    }
};
