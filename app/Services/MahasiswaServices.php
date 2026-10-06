<?php

namespace App\Services;

use App\Models\Mahasiswa;

class MahasiswaServices
{
    public function getMahasiswa()
    {
        return Mahasiswa::mahasiswa();
    }

    public function getMahasiswaInvitaion(string $kelompokId)
    {
        return Mahasiswa::MahasiswaInvitation($kelompokId);
    }
}
