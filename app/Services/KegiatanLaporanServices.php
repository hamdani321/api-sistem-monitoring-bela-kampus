<?php

namespace App\Services;

use App\Models\Registrasi;
use App\Models\RegistrasiAnggota;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class KegiatanLaporanServices
{
    public function getKegiatan()
    {

        $mahasiswa = Auth::user()->load('mahasiswa')['mahasiswa'];
        $registrasi = Registrasi::with(['mahasiswa', 'sekolah', 'portal', 'registrasi_anggota'])->where(['nim_mahasiswa' => $mahasiswa['nim']])->get();
        $registrasiAnggota = RegistrasiAnggota::with(['registrasi' => function ($queryRegistrasi) {
            return $queryRegistrasi->with(['mahasiswa', 'sekolah']);
        }, 'mahasiswa'])->where(['nim_mahasiswa' => $mahasiswa['nim']])->get();
        return response([
            'message' => "Berhasil ambil data kegiatan!",
            'data' => [
                'registrasi' => $registrasi,
                'registrasi_anggota' => $registrasiAnggota,
            ]
        ], Response::HTTP_OK);
    }
}
