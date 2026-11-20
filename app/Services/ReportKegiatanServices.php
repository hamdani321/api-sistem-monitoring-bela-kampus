<?php


namespace App\Services;

use App\Models\FotoKegiatan;
use App\Models\ReportKegiatan;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReportKegiatanServices
{
    public function createReportKegiatan(array $dataReport)
    {
        DB::beginTransaction();
        try {
            
            $mahasiswa = Auth::user()->load('mahasiswa')['mahasiswa'];
            $reportKegiatan = ReportKegiatan::create([
                "id" => Str::uuid(),
                "registrasi_id" => $dataReport['registrasi_id'],
                "nim_mahasiswa" => $mahasiswa['nim'],
                "nama_pic" => $dataReport['nama_pic'],
                "nomor_hp_pic" => $dataReport['nomor_hp_pic'],
                "video" => $dataReport['video'],
                'deskripsi' => $dataReport['deskripsi']
            ]);
            $dataFoto = [];
            foreach ($dataReport['foto'] as $key => $value) {
                $dataFoto[] = [
                     "id" => Str::uuid(),
                    "report_kegiatan_id" => $reportKegiatan->id,
                    'path' => $value->store('foto'),
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }
            FotoKegiatan::insert($dataFoto);
            DB::commit();
            return response(['message' => "Berhasil input report kegiatan!", "data" => $reportKegiatan], Response::HTTP_CREATED);
        
        } catch (Exception $ex) {
            //throw $th;
            DB::rollBack();
            return response(['message' => "Ada masalah! : " . $ex->getMessage()], Response::HTTP_BAD_REQUEST);
        }

    }
}
