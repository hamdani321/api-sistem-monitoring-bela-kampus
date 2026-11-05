<?php

namespace App\Services;

use App\Models\Registrasi;

class RegistrasiAnggotaServices
{
    public function getAnggotaRegistrasiById(string $registrasiId)
    {
        $registrasi = Registrasi::with(['mahasiswa' => function ($queryMahasiswa) {
            return $queryMahasiswa->with(['kelas', 'prodi']);
        }, 'portal' => function ($queryPortal) {
            return $queryPortal->with(['tahun_ajaran']);
        }, 'registrasi_anggota' => function ($queryRegistrasiAnggota) {
            return $queryRegistrasiAnggota->with(['mahasiswa']);
        }, 'sekolah', 'report_kegiatan'])->find($registrasiId);

        return response(['message' => "Berhasil mengambil data registrasi!", 'data' => $registrasi]);
    }
}
