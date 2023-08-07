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
        Schema::create('circumscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_province');
            $table->string('name');
            $table->string('subname');
            $table->string('siege_number');
            $table->timestamps();

            $table->foreign('id_province')->references('id')->on('provinces');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('circumscriptions');
    }
};
