<?php

namespace App\Services;

use App\Models\Registrasi;
use App\Models\RegistrasiAnggota;
use App\Models\ReportKegiatan;

class RegistrasiAnggotaServices
{
    public function getAnggotaRegistrasiById(string $registrasiId)
    {
        $registrasiAnggota = RegistrasiAnggota::with(['mahasiswa'])->where(['registrasi_id' => $registrasiId])->get();
        $registrasi = Registrasi::with(['sekolah', 'portal' => function ($queryPortal) {
            return $queryPortal->with(['tahun_ajaran']);
        }, 'mahasiswa' => function ($queryMahasiswa) {
            return $queryMahasiswa->with(['prodi', 'kelas']);
        }])->find($registrasiId);
        $reportKegiatan = ReportKegiatan::with(['mahasiswa'])->where('registrasi_id', $registrasi->id)->get();
        return [
            'registrasi_anggota' => $registrasiAnggota,
            "registrasi" => $registrasi,
            'report_kegiatan' => $reportKegiatan
        ];
    }
}
