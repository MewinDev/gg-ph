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
        Schema::create('position_vote_limits', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('level');
            $table->string('area')->nullable();
            $table->integer('max_votes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('position_vote_limits');
    }
};
