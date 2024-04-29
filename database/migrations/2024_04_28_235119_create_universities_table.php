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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('comment');
            $table->unsignedBigInteger('location_id')->index();
            $table->foreign('location_id')->references('id')->on('locations');
            $table->unsignedBigInteger('program_id')->index();
            $table->foreign('program_id')->references('id')->on('programs');         
            $table->unsignedBigInteger('program_requirement_id')->index();
            $table->foreign('program_requirement_id')->references('id')->on('program_requirements');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
