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
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_divice');
            $table->unsignedBigInteger('id_comment');
            $table->boolean('like');
            $table->boolean('dislike');
            $table->timestamps();

            $table->foreign('id_divice')->references('id')->on('divices');
            $table->foreign('id_comment')->references('id')->on('comments');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reactions');
    }
};
