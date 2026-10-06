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
        Schema::create('kelompok', function (Blueprint $table) {
            $table->id();
            $table->integer("portal_id");
            $table->integer('registrasi_id');
            $table->integer('nim_mahasiswa')->comment("Ketua kelompok");
            $table->string('nama');
            $table->enum('status', ["PENDING", "APPROVE"])->default("PENDING");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelompok');
    }
};
