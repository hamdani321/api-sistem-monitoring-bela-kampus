<?php

namespace App\Services;

use App\Models\Portal;
use App\Models\Registrasi;

class DashboardServices
{
    public function getDataDashboard()
    {
        $portal = Portal::with(['tahun_ajaran'])->get();
        $registrasi = Registrasi::get();
        return [
            "portal" => $portal,
            'registarsi' => $registrasi
        ];
    }
}
