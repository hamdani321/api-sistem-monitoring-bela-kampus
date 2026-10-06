<?php

namespace App\Services;

use App\Models\Registrasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegistrasiServices
{
    public function __construct(private KelompokServices $kelompokService) {}

    public function getRegistrasi()
    {
        return Registrasi::with(['sekolah', 'mahasiswa' => function ($queryMahasiswa) {
            return $queryMahasiswa->with(['prodi']);
        }, 'portal' => function ($queryPortal) {
            return $queryPortal->with(['tahun_ajaran']);
        }])->get();
    }

    public function createRegistrasi(array $dataRegistrasi)
    {
        return DB::transaction(function () use ($dataRegistrasi) {

            $registrasi = Registrasi::create([
                'portal_id' => $dataRegistrasi['portal_id'],
                'sekolah_id' => $dataRegistrasi['sekolah_id'],
                'nim_mahasiswa' => Auth::user()->load('mahasiswa')['mahasiswa']['nim'],
                'tipe' => $dataRegistrasi['tipe'],
            ]);

            if ($dataRegistrasi['tipe'] == "Kelompok") {
                $dataKelompok = [
                    "portal_id" => $dataRegistrasi['portal_id'],
                    'registrasi_id' => $registrasi->id,
                    'nama' => $dataRegistrasi['nama_kelompok'],
                    'nim_mahasiswa' => $registrasi->nim_mahasiswa,
                ];
                $this->kelompokService->createKelompok($dataKelompok);
            }
            return $registrasi;
        });
    }
}
