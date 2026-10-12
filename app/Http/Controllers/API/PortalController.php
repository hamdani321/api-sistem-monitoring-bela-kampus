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
        // $user =  Auth::user();
        $mahasiswa = Auth::user()->load('mahasiswa')['mahasiswa'];
        $portal = Portal::with(['tahun_ajaran'])->where('status', "AKTIF")->first();
        if ($portal == null) {
            return response(['data' => [
                "portal" => null,
                "registrasi" => null,
                "registrasi_anggota" => null
            ]]);
        }
        $registrasi = Registrasi::where(['nim_mahasiswa' => $mahasiswa['nim'] ?? 0, "portal_id" => $portal->id])->first();
        $anggotaRegistrasi = RegistrasiAnggota::where(['portal_id' => $portal->id ?? 0, 'nim_mahasiswa' => $mahasiswa['nim'] ?? 0])->first();
        return response(['data' => [
            "portal" => $portal,
            "registrasi" => $registrasi,
            "registrasi_anggota" => $anggotaRegistrasi
        ]]);
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
            return $queryRegistrasi->with(['mahasiswa', 'registrasi_anggota', 'sekolah', 'kelompok']);
        }])->find($id);
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

    public function get_portal_by_id(string $portalId)
    {
        $portal = $this->portalService->getPortalById($portalId);
        return response()->json([
            'success' => true,
            'message' => "Data portal ditemukan!",
            "data" => $portal
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
