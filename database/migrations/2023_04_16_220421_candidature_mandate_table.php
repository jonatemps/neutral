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
        Schema::create('candidature_mandate', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_candidature');
            $table->unsignedBigInteger('id_mandate');
            $table->timestamps();


            $table->foreign('id_candidature')->references('id')->on('candidatures');
            $table->foreign('id_mandate')->references('id')->on('mandates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
