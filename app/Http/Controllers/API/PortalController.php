<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrasiPortalRequest;
use App\Http\Requests\StorePortalRequest;
use App\Http\Resources\PortalResource;
use App\Models\Portal;
use App\Models\Sekolah;
use App\Services\PortalServices;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function __construct(public PortalServices $portalService) {}

    public function index()
    {
        return PortalResource::collection($this->portalService->getAllPortal());
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
        return response()->json([
            'success' => true,
            'message' => "Data portal ditemukan!",
            "data" => [
                "portal" => $dataPortal,
                "sekolah" => $sekolah
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
