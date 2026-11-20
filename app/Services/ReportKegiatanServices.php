<?php


namespace App\Services;

use App\Models\ReportKegiatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ReportKegiatanServices
{
    public function createReportKegiatan(array $dataReport)
    {
        $filePath = $dataReport['foto']->store('foto');
        $mahasiswa = Auth::user()->load('mahasiswa')['mahasiswa'];
        return ReportKegiatan::create([
            "id" => Str::uuid(),
            "registrasi_id" => $dataReport['registrasi_id'],
            "nim_mahasiswa" => $mahasiswa['nim'],
            "nama_pic" => $dataReport['nama_pic'],
            "nomor_hp_pic" => $dataReport['nomor_hp_pic'],
            "foto" => $filePath,
            "video" => $dataReport['video'],
            'deskripsi' => $dataReport['deskripsi']
        ]);
    }
}
