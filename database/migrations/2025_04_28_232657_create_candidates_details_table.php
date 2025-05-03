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

        Schema::create('candidates_biographies', function (Blueprint $table) {
            $table->id();
            $table->longText('bio_description')->nullable();
            $table->foreignId('candidate_id')->nullable()->constrained('candidates')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('candidates_platforms', function (Blueprint $table) {
            $table->id();
            $table->longText('pla_description')->nullable();
            $table->foreignId('candidate_id')->nullable()->constrained('candidates')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('candidates_educations', function (Blueprint $table) {
            $table->id();
            $table->string('edu_schoolname');
            $table->string('edu_degree');
            $table->string('edu_field_of_study')->nullable();
            $table->string('edu_start_year');
            $table->string('edu_end_year');
            $table->longText('edu_description')->nullable();
            $table->foreignId('candidate_id')->nullable()->constrained('candidates')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('candidates_advocacies', function (Blueprint $table) {
            $table->id();
            $table->string('adv_title');
            $table->foreignId('candidate_id')->nullable()->constrained('candidates')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('candidates_achievements', function (Blueprint $table) {
            $table->id();
            $table->string('ach_title');
            $table->date('ach_date_awarded');
            $table->foreignId('candidate_id')->nullable()->constrained('candidates')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('candidates_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('exp_title');
            $table->string('exp_organization')->nullable();
            $table->date('exp_start_date');
            $table->date('exp_end_date');
            $table->foreignId('candidate_id')->nullable()->constrained('candidates')->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('candidates_medias', function (Blueprint $table) {
            $table->id();
            $table->string('med_name');
            $table->string('med_type')->nullable();
            $table->string('med_description')->nullable();
            $table->foreignId('candidate_biography_id')->nullable()->constrained('candidates_biographies')->onDelete('set null');
            $table->foreignId('candidate_platform_id')->nullable()->constrained('candidates_platforms')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates_bio');
        Schema::dropIfExists('candidates_biographies');
        Schema::dropIfExists('candidates_educations');
        Schema::dropIfExists('candidates_advocacies');
        Schema::dropIfExists('candidates_achievements');
        Schema::dropIfExists('candidates_experiences');
        Schema::dropIfExists('candidates_medias');
    }
};
