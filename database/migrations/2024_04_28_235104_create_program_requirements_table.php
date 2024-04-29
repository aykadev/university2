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
        Schema::create('program_requirements', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->unsignedBigInteger('program_id')->index();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->string('program_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_requirements');
        Schema::dropIfExists('program_requirement_id');
    }
};
