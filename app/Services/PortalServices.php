<?php

namespace App\Services;

use App\Models\Mahasiswa;
use App\Models\Portal;
use App\Models\Registrasi;
use App\Models\RegistrasiAnggota;
use App\Models\Sekolah;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PortalServices
{
    public function getAktifPortal()
    {
        $mahasiswa = Auth::user()->load('mahasiswa')['mahasiswa'];
        $portal = Portal::with(['tahun_ajaran'])->where('status', "AKTIF")->first();
        if ($portal == null) {
            return response(['data' => [
                "portal" => null,
                "registrasi" => null,
                "registrasi_anggota" => null
            ]], 404);
        }
        $registrasi = Registrasi::where(['nim_mahasiswa' => $mahasiswa['nim'] ?? 0, "portal_id" => $portal->id])->first();
        $anggotaRegistrasi = RegistrasiAnggota::where(['portal_id' => $portal->id ?? 0, 'nim_mahasiswa' => $mahasiswa['nim'] ?? 0])->first();
        return response(['data' => [
            "portal" => $portal,
            "registrasi" => $registrasi,
            "registrasi_anggota" => $anggotaRegistrasi
        ]]);
    }

    public function activatePortal(string $portalId)
    {
        DB::beginTransaction();
        try {
            $portal = Portal::find($portalId);
            if ($portal->status == Portal::ACTIVE) {
                $portal->status = Portal::NONACTIVE;
                $portal->save();
                DB::commit();
                return response(['message' => "Berhasil nonaktifkan portal!", 'data' => $portal]);
            }
            $portalActive = Portal::where('status', Portal::ACTIVE)->first();
            if ($portalActive) {
                return response(['message' => "Saat ini sedang ada portal yang aktif!"], Response::HTTP_UNPROCESSABLE_ENTITY);
            } else {
                $portal->status = Portal::ACTIVE;
                $portal->save();
                DB::commit();
                return response(['message' => "Berhasil aktifkan portal!"], Response::HTTP_OK);
            }
        } catch (Exception $ex) {
            DB::rollBack();
            return response(['message' => $ex->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }

    public function getAllPortal()
    {
        return Portal::portal();
    }

    public function getPortalById(string $portalId)
    {
        $user = Auth::user();
        $dataPortal = Portal::with(['tahun_ajaran', 'registrasi' => function ($queryRegistrasi) use ($user) {
            return $queryRegistrasi->with(['mahasiswa', 'registrasi_anggota', 'sekolah'])
                ->where("nim_mahasiswa", $user->load('mahasiswa')['mahasiswa']['nim']);
        }])->find($portalId);
        $sekolah = Sekolah::get();
        $mahasiswa = Mahasiswa::get();

        return response()->json([
            'success' => true,
            'message' => "Data portal ditemukan!",
            "data" => [
                'portal' => $dataPortal,
                'sekolah' => $sekolah,
                'mahasiswa' => $mahasiswa
            ]
        ]);
    }

    public function createPortal(array $dataPortal)
    {
        $dataPortal['id'] = Str::uuid();
        $portal = Portal::create($dataPortal);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil tambah data!',
            'data' => $portal,
        ], 201);
        // return response()->json();
    }
}
