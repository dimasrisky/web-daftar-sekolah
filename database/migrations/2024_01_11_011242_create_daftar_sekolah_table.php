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
        Schema::create('daftar_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('kecamatan_id')->constrained('daftar_kecamatan');
            $table->string('status');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_sekolah');
    }
};
