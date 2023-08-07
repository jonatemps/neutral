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
            $table->text('discount_code');
            $table->unsignedBigInteger('id_party');
            $table->text('photo');
            $table->string('name');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('gender');
            $table->string('slogan');
            $table->string('id_facebook');
            $table->string('id_twitter');
            $table->string('id_linkedIn');
            $table->timestamps();

            $table->foreign('id_party')->references('id')->on('parties');

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
