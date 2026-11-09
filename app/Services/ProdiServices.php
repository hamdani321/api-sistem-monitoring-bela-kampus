<?php

namespace App\Services;

use App\Models\Prodi;
use Illuminate\Http\Response;

class ProdiServices
{
    public function getProdi()
    {
        return response(['message' => "Berhasil ambil data prodi!", "data" => Prodi::get()], Response::HTTP_OK);
    }
}
