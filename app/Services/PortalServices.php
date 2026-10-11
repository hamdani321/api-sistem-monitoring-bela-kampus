<?php

namespace App\Services;

use App\Models\Mahasiswa;
use App\Models\Portal;
use App\Models\Sekolah;
use Illuminate\Support\Facades\Auth;

class PortalServices
{
    public function getAllPortal()
    {
        return Portal::portal();
        // return Portal::with(['tahun_ajaran', 'registrasi'])->get();
    }

    public function getPortalById (string $portalId) {
        $user = Auth::user();
        $dataPortal = Portal::with(['tahun_ajaran', 'registrasi' => function ($queryRegistrasi) use ($user) {
            return $queryRegistrasi->with(['mahasiswa', 'registrasi_anggota', 'sekolah', 'kelompok'])
            ->where("nim_mahasiswa", $user->load('mahasiswa')['mahasiswa']['nim']);
        }])->find($portalId);
        $sekolah = Sekolah::get();
        $mahasiswa = Mahasiswa::get();
        return [
            'portal' => $dataPortal,
            'sekolah' => $sekolah,
            'mahasiswa' => $mahasiswa
        ];
    }

    public function createPortal(array $dataPortal): Portal
    {
        return Portal::create($dataPortal);
    }
}
