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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->string('title');
            $table->string('instutition_name');
            $table->text('instutition_logo')->nullable();
            $table->text('description')->nullable();
            $table->string('start_year');
            $table->string('end_year')->nullable();
            $table->timestamps();

            $table->foreign('candidate_id')->references('id')->on('candidates');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
