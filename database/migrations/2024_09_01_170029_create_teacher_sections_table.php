<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teacher_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->references('id')->on('teachers');
            $table->foreignId('section_id')->references('id')->on('sections');
            $table->foreignId('grade_lvl_id')->references('id')->on('grade_levels');
            $table->foreignId('strand_id')->references('id')->on('strands');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_sections');
    }
};
