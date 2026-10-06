<?php

namespace App\Services;

use App\Models\KelompokAnggota;

class KelompokAnggotaServices
{
    public function createAnggotaKelompok(array $dataAnggotaKelompok)
    {
        return KelompokAnggota::create($dataAnggotaKelompok);
    }
}
