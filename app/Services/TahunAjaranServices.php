<?php

namespace App\Services;

use App\Models\TahunAjaran;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

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

    public function findTahunAjaran(string $id)
    {
        return response([
            "message" => "Data tahun ajaran ditemukan!",
            "data" => TahunAjaran::find($id)
        ], Response::HTTP_OK);
    }

    public function editTahunAjaran(string $id, array $newData)
    {
        $tahunAjaran = TahunAjaran::find($id);
        if ($tahunAjaran) {
            $tahunAjaran->update($newData);
            $tahunAjaran->save();
            return response([
                "message" => "Berhasil edit data!",
                "data" => $tahunAjaran
            ], Response::HTTP_OK);
        }
        throw new HttpException(404, "data tidak ditemukan!");
    }
}
