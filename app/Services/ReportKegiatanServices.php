<?php


namespace App\Services;

use App\Models\ReportKegiatan;

class ReportKegiatanServices
{
    public function createReportKegiatan(array $dataReport)
    {
        $filePath = $dataReport['foto']->store('foto');
        return ReportKegiatan::create([
            "registrasi_id" => $dataReport['registrasi_id'],
            "nama_pic" => $dataReport['nama_pic'],
            "nomor_hp_pic" => $dataReport['nomor_hp_pic'],
            "foto" => $filePath,
            "video" => $dataReport['video'],
            'deskripsi' => $dataReport['deskripsi']
        ]);
    }
}
