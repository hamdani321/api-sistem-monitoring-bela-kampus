<?php

namespace App\Services;

use App\Http\Resources\SekolahResource;
use App\Models\Sekolah;
use Illuminate\Http\Response;

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

    public function findSekolah(string $id)
    {
        return new SekolahResource(Sekolah::find($id));
    }

    public function updateSekolah(array $sekolah, string $id)
    {
        $sekolah = Sekolah::where('id', $id)->update($sekolah);
        // return new SekolahResource($sekolah);
        return response(['message' => "Berhasil update sekolah!", 'data' => $sekolah], Response::HTTP_OK);
    }
}
