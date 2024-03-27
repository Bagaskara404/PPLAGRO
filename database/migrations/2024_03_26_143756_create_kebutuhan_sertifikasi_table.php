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
        Schema::create('kebutuhan_sertifikasi', function (Blueprint $table) {
            $table->id();
            $table->string('form_nama');
            $table->string('form_alamat');
            $table->string('form_no_hp');
            $table->string('form_sertifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebutuhan_sertifikasi');
    }
};
