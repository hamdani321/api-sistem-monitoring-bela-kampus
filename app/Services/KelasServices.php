<?php

namespace App\Services;

use App\Models\Kelas;

class KelasServices
{
    public function getKelas()
    {
        return response([
            'data' =>Kelas::with(['prodi'])->get()
        ]);
        // return Kelas::get();
    }
}
