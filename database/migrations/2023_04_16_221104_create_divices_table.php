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
        Schema::create('divices', function (Blueprint $table) {
            $table->id();
            $table->string('os_type');
            $table->string('os_family');
            $table->string('os_name');
            $table->string('os_version');
            $table->string('os_title');
            $table->string('divice_type');
            $table->string('browser_name');
            $table->string('browser_version');
            $table->string('browser_title');
            $table->string('divice_name');
            $table->string('ip_adresse');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divices');
    }
};
