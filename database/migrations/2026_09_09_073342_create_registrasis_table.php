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
        Schema::create('registrasi', function (Blueprint $table) {
            $table->id();
            $table->integer('portal_id');
            $table->integer("sekolah_id");
            $table->integer('nim_mahasiswa');
            $table->enum('tipe', ["Individu", 'Kelompok']);
            $table->enum("status", ["Pending", "Approve"])->default("Pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasi');
    }
};
