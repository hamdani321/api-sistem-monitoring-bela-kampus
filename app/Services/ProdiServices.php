<?php

namespace App\Services;

use App\Models\Prodi;

class ProdiServices
{
    public function getProdi()
    {
        return Prodi::get();
    }
}
