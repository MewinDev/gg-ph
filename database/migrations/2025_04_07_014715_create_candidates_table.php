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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('can_ballot_number');
            $table->string('can_picture')->nullable();
            $table->string('can_firstname');
            $table->string('can_lastname');
            $table->string('can_middlename')->nullable();
            $table->string('can_nickname')->nullable();
            $table->string('can_age');
            $table->string('can_sex');
            $table->date('can_birthdate');
            $table->string('can_years_of_service');
            // Use constrained() for foreign keys
            $table->foreignId('position_id')->nullable()->constrained('positions')->onDelete('set null');
            $table->foreignId('partylist_id')->nullable()->constrained('partylists')->onDelete('set null');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
