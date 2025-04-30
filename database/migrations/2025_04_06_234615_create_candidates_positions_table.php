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
            $table->enum('pos_code', [
                'president',
                'vice_president',
                'senator',
            ]);
            $table->integer('pos_max_votes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
