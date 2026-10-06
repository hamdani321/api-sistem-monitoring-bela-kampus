<?php

namespace App\Services;

use App\Models\Portal;

class PortalServices
{
    public function getAllPortal()
    {
        return Portal::portal();
        // return Portal::with(['tahun_ajaran', 'registrasi'])->get();
    }

    public function createPortal(array $dataPortal): Portal
    {
        return Portal::create($dataPortal);
    }
}
