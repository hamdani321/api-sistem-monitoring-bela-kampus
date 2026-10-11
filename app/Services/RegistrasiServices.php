<?php

namespace App\Services;

use App\Models\Registrasi;
use App\Models\RegistrasiAnggota;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegistrasiServices
{
    public function __construct(private KelompokServices $kelompokService) {}

    public function getRegistrasi()
    {
        return Registrasi::with(['sekolah','registrasi_anggota', 'mahasiswa' => function ($queryMahasiswa) {
            return $queryMahasiswa->with(['prodi']);
        }, 'portal' => function ($queryPortal) {
            return $queryPortal->with(['tahun_ajaran']);
        }])->get();
    }

    public function getRegistrasiById(string $id)
    {
        return Registrasi::with(['report_kegiatan'])->find($id);
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
            $anggota = collect();
            foreach ($dataRegistrasi['anggota_registrasi'] as $key => $value) {
                $anggota->add([
                    'registrasi_id' => $registrasi->id,
                    'portal_id' => $dataRegistrasi['portal_id'],
                    "nim_mahasiswa" => $value['nim'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            };

            RegistrasiAnggota::insert($anggota->toArray());

            return $registrasi;
        });
    }
}
