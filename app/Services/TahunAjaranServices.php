<?php

namespace App\Services;

use App\Models\TahunAjaran;

class TahunAjaranServices
{
    public function getTahunAjaran()
    {
        return TahunAjaran::get();
    }

    public function createTahunAjaran(array $data): TahunAjaran
    {
        return TahunAjaran::create($data);
    }
}
