<?php

namespace App\Services;

use App\Models\Sekolah;

class SekolahServices
{
    public function getSekolah()
    {
        return Sekolah::orderBy('nama', "ASC")->get();
    }
}
