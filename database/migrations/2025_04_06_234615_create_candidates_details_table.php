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
            $table->enum('pos_name', [
                'senator', 
                'mayor', 
                'vice mayor', 
                'councilor', 
                'representative', 
                'barangay captain', 
                'barangay kagawad', 
                'SK chairperson', 
                'SK kagawad'
            ]);
            $table->timestamps();
        });
        
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('reg_name');
            $table->timestamps();
        });
        
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('prov_name');
            $table->timestamps();
        });
        
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->foreignId('region_id')->nullable()->constrained('regions')->onDelete('set null');
            $table->foreignId('province_id')->nullable()->constrained('provinces')->onDelete('set null');
            $table->timestamps();
        });
        
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('dis_name');
            $table->timestamps();
        });
        
        Schema::create('barangays', function (Blueprint $table) {
            $table->id();
            $table->string('bar_name');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('set null');
            $table->foreignId('district_id')->nullable()->constrained('districts')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
        Schema::dropIfExists('regions');
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('cities');
        Schema::dropIfExists('districts');
        Schema::dropIfExists('barangays');
    }
};
