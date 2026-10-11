<?php

namespace App\Services;

use App\Models\Registrasi;
use App\Models\RegistrasiAnggota;

class RegistrasiAnggotaServices {
    public function getAnggotaRegistrasiById(string $registrasiId) {
        return [
            'registrasi_anggota' => RegistrasiAnggota::with(['mahasiswa'])->where(['registrasi_id' => $registrasiId])->get(),
            "registrasi" => Registrasi::with(['sekolah','portal' => function($queryPortal) {
                return $queryPortal->with(['tahun_ajaran']);
            }, 'mahasiswa' => function($queryMahasiswa) {
                return $queryMahasiswa->with(['prodi', 'kelas']);
            }])->find($registrasiId)
        ];
        // return RegistrasiAnggota::with(['mahasiswa'])->where(['registrasi_id' => $registrasiId])->get();
    }
}