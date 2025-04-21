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
            // Use constrained() for foreign keys
            $table->foreignId('position_id')->constrained('positions')->onDelete('cascade');
            $table->foreignId('partylist_id')->nullable()->constrained('partylists')->onDelete('set null');
            $table->foreignId('region_id')->nullable()->constrained('regions')->onDelete('set null');
            $table->foreignId('province_id')->nullable()->constrained('provinces')->onDelete('set null');
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
        Schema::dropIfExists('candidates');
    }
};
