<?php

namespace App\Services;

use App\Models\Kelas;

class KelasServices
{
    public function getKelas()
    {
        return Kelas::get();
    }
}
