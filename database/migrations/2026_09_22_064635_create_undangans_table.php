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
        Schema::create('undangan', function (Blueprint $table) {
            $table->id();
            $table->integer("nim_mahasiswa");
            $table->integer('kelompok_id');
            $table->enum('status', ["Request", "Accept"])->default("Request");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('undangan');
    }
};
