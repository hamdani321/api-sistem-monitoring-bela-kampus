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
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->uuid("id")->primary()->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('nim')->unique();
            $table->string('kode_prodi');
            $table->string('kode_kelas');
            $table->enum("jenis_kelamin", ['Laki-Laki', "Perempuan"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
