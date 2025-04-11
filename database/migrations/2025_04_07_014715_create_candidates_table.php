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
        Schema::create('senatorial_candidates', function (Blueprint $table) {
            $table->id();
            $table->string('sen_picture')->nullable();
            $table->string('sen_firstname');
            $table->string('sen_lastname');
            $table->string('sen_middlename')->nullable();
            $table->string('sen_age');
            $table->string('sen_sex');
            // Use constrained() for foreign key
            $table->foreignId('partylist_id')->nullable()->constrained('partylists')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('local_candidates', function (Blueprint $table) {
            $table->id();
            $table->string('loc_picture')->nullable();
            $table->string('loc_firstname');
            $table->string('loc_lastname');
            $table->string('loc_middlename')->nullable();
            $table->string('loc_age');
            $table->string('loc_sex');
            // Use constrained() for foreign keys
            $table->foreignId('local_position_id')->constrained('local_positions')->onDelete('cascade');
            $table->foreignId('partylist_id')->nullable()->constrained('partylists')->onDelete('set null');
            $table->foreignId('region_id')->nullable()->constrained('regions')->onDelete('set null');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('set null');
            $table->foreignId('province_id')->nullable()->constrained('provinces')->onDelete('set null');
            $table->foreignId('district_id')->nullable()->constrained('districts')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('bangsamoro_candidates', function (Blueprint $table) {
            $table->id();
            $table->string('bang_picture')->nullable();
            $table->string('bang_firstname');
            $table->string('bang_lastname');
            $table->string('bang_middlename')->nullable();
            $table->string('bang_age');
            $table->string('bang_sex');
            // Use constrained() for foreign keys
            $table->foreignId('bangsamoro_parliamentary_position_id')->constrained('bangsamoro_parliamentary_positions')->onDelete('cascade');
            $table->foreignId('partylist_id')->nullable()->constrained('partylists')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senatorial_candidates');
        Schema::dropIfExists('local_candidates');
        Schema::dropIfExists('bangsamoro_candidates');
    }
};
