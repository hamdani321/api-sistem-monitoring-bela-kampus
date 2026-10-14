<?php

namespace App\Services;

use App\Models\Sekolah;

class SekolahServices
{
    public function getSekolah()
    {
        return Sekolah::orderBy('nama', "ASC")->get();
    }

    public function createSekolah(array $dataSekolah)
    {
        return Sekolah::create($dataSekolah);
    }
}
