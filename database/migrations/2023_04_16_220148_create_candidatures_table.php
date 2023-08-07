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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->unsignedBigInteger('id_circumscription');
            $table->unsignedBigInteger('id_year');
            $table->timestamps();


            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->foreign('id_circumscription')->references('id')->on('circumscriptions');
            $table->foreign('id_year')->references('id')->on('years');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
