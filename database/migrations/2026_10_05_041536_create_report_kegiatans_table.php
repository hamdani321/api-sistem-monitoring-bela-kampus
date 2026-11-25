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
        Schema::create('report_kegiatan', function (Blueprint $table) {
            $table->uuid("id")->primary()->unique();
            $table->string('registrasi_id');
            $table->string('nim_mahasiswa')->comment("Mahasiswa yang membuat laporan!");
            $table->string('nama_pic');
            $table->string('nomor_hp_pic');
            $table->string('video')->nullable();
            $table->text("deskripsi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_kegiatan');
    }
};
