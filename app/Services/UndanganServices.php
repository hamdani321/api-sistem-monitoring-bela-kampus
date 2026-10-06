<?php


namespace App\Services;

use App\Models\KelompokAnggota;
use App\Models\Undangan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UndanganServices
{

    public function __construct(private KelompokAnggotaServices $kelompokAnggotaServices) {}

    public function getAllUndangan()
    {
        return Undangan::Undangan();
    }

    public function createUndangan(array $data)
    {
        return Undangan::create($data);
    }

    public function getUndanganByKelompok(string $kelompokId)
    {
        return Undangan::with(["mahasiswa"])->where(['kelompok_id' => $kelompokId])->get();
    }

    public function acceptJoinGroup(array $dataJoin)
    {
        return DB::transaction(function () use ($dataJoin) {
            Undangan::where("id", $dataJoin['undangan_id'])->update(['status' => Undangan::ACCEPT]);
            $dataAnggotaKelompok = [
                "kelompok_id" => $dataJoin['kelompok_id'],
                "registrasi_id" => $dataJoin['registrasi_id'],
                "nim_mahasiswa" => Auth::user()->load('mahasiswa')['mahasiswa']['nim']
            ];
            $kelompok = $this->kelompokAnggotaServices->createAnggotaKelompok($dataAnggotaKelompok);
            return $kelompok;
        });
    }
}
