<?php


namespace App\Services;

use App\Models\Kelompok;
use App\Models\Undangan;

class KelompokServices
{
    public function getKelompok()
    {
        return Kelompok::kelompok();
    }

    public function getKelompokById(string $kelompokId)
    {
        return Kelompok::with(['kelompok_anggota' => function ($queryKelompokAnggota) {
            return $queryKelompokAnggota->with(['mahasiswa']);
        }])->find($kelompokId);
    }


    public function createKelompok(array $data)
    {
        return Kelompok::create($data);
    }

    public function createInvitationGroup(array $dataInvitation): Undangan
    {
        return Undangan::create($dataInvitation);
    }
}
