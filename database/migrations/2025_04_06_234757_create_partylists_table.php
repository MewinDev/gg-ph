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
        Schema::create('partylists', function (Blueprint $table) {
            $table->id();
            $table->string('par_abbreviatation');
            $table->string('par_name');
            $table->timestamps();
        });

        Schema::create('political_parties', function (Blueprint $table) {
            $table->id();
            $table->string('pol_abbreviatation');
            $table->string('pol_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partylists');
        Schema::dropIfExists('political_parties');
    }
};
