<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrasiPortalRequest;
use App\Http\Requests\StorePortalRequest;
use App\Models\Mahasiswa;
use App\Models\Portal;
use App\Models\Sekolah;
use App\Services\PortalServices;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function __construct(public PortalServices $portalService) {}

    public function index()
    {

        return $this->portalService->getAktifPortal();
        // $user =  Auth::user();

    }

    public function get_data_portal(Request $request)
    {
        $portal = Portal::with(['tahun_ajaran'])->get();
        return response([
            'message' => "data ditemukan",
            'data' => $portal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortalRequest $request)
    {
        return $this->portalService->createPortal($request->validated());
    }

    public function registrasi_portal(RegistrasiPortalRequest $request) {}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataPortal = Portal::with(['tahun_ajaran', 'registrasi' => function ($queryRegistrasi) {
            return $queryRegistrasi->with(['mahasiswa', 'registrasi_anggota', 'sekolah']);
        }])->find($id);
        $sekolah = Sekolah::get();
        $mahasiswa = Mahasiswa::with(['registrasi' => function ($queryRegistrasi) use ($dataPortal) {
            return $queryRegistrasi->where(['portal_id' => $dataPortal->id]);
        }, 'registrasi_anggota' => function ($queryRegistrasiAnggota) use ($dataPortal) {
            return $queryRegistrasiAnggota->where(['portal_id' => $dataPortal->id]);
        }])->get();
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
        // $portal = $this->portalService->getPortalById($portalId);
        return $this->portalService->getPortalById($portalId);
        // return response()->json([
        //     'success' => true,
        //     'message' => "Data portal ditemukan!",
        //     "data" => $portal
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

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
