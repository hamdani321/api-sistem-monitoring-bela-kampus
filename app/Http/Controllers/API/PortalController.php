<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrasiPortalRequest;
use App\Http\Requests\StorePortalRequest;
use App\Http\Resources\PortalResource;
use App\Models\Mahasiswa;
use App\Models\Portal;
use App\Models\Registrasi;
use App\Models\RegistrasiAnggota;
use App\Models\Sekolah;
use App\Services\PortalServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortalController extends Controller
{
    public function __construct(public PortalServices $portalService) {}

    public function index()
    {
        $user =  Auth::user();
        $mahasiswa = $user->load('mahasiswa');
        $portal = Portal::where('waktu_mulai', '<=', now())->where('waktu_selesai', ">=", now())->first();
        $registrasi = Registrasi::where(['nim_mahasiswa' => $mahasiswa['nim']])->first();
        // $anggotaRegistrasi = RegistrasiAnggota::where(['registrasi_id' => $registrasi->id, "nim_mahasiswa" => $mahasiswa['nim']])->first();
        return response(['data' => [
            "portal" => $portal,
            "registrasi" => $registrasi,
            // "anggota_registrasi" => $anggotaRegistrasi
        ]]);
        // return new PortalResource($portal);
        // return PortalResource::collection($this->portalService->getAllPortal());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortalRequest $request)
    {
        $dataValid = $request->validated();
        $portal = $this->portalService->createPortal($dataValid);
        return response()->json([
            'success' => true,
            'message' => 'Berhasil tambah data!',
            'data' => $portal,
        ], 201);
    }

    public function registrasi_portal(RegistrasiPortalRequest $request) {}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataPortal = Portal::with(['tahun_ajaran', 'registrasi' => function ($queryRegistrasi) {
            return $queryRegistrasi->with(['mahasiswa', 'sekolah', 'kelompok']);
        }])->find($id);
        $sekolah = Sekolah::get();
        $mahasiswa = Mahasiswa::get();
        return response()->json([
            'success' => true,
            'message' => "Data portal ditemukan!",
            "data" => [
                "portal" => $dataPortal,
                "sekolah" => $sekolah,
                "mahasiswa" => $mahasiswa
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
