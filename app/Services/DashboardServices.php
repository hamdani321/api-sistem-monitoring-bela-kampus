<?php

namespace App\Services;

use App\Models\Portal;
use App\Models\Registrasi;
use App\Models\RegistrasiAnggota;
use Illuminate\Support\Facades\Auth;

class DashboardServices
{
    public function dashboardAdmin()
    {
        $portal = Portal::with(['tahun_ajaran'])->get();
        $registrasi = Registrasi::get();
        return response([
            'message' => "Berhasil ambil data portal",
            "data" => [
                "portal" => $portal,
                'registrasi' => $registrasi
            ]
        ]);
    }

    public function dashboardMahasiswa()
    {
        $mahasiswa = Auth::user()->load('mahasiswa')['mahasiswa'];
        $portalActive = Portal::with(['tahun_ajaran'])->where(['status' => 'AKTIF'])->first();
        $userRegistrasi = Registrasi::where(['nim_mahasiswa' => $mahasiswa['nim']])->get();
        $userAnggotaRegistrasi = RegistrasiAnggota::with(['registrasi'])->where(['nim_mahasiswa' => $mahasiswa['nim']])->get();
        return response([
            'message' => "Berhasil ambil data dashboard mahasiswa!",
            'data' => [
                "portalActive" => $portalActive,
                'userRegistrasi' => $userRegistrasi,
                'userAnggotaRegistrasi' => $userAnggotaRegistrasi
            ]
        ]);
    }
}
