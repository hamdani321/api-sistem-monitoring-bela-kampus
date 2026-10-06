<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\KelompokResource;
use App\Services\KelompokServices;
use App\Services\MahasiswaServices;
use App\Services\UndanganServices;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    public function __construct(
        private KelompokServices $kelompokService,
        private UndanganServices $undanganService,
        private MahasiswaServices $mahasiswaService
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return KelompokResource::collection($this->kelompokService->getKelompok());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function invite_group(Request $request)
    {
        $dataValid = $request->validate([
            "nim_mahasiswa" => ['required'],
            "kelompok_id" => ['required']
        ], [
            "*.required" => ":attribute Tidak boleh kosong!"
        ]);
        $undangan = $this->kelompokService->createInvitationGroup($dataValid);
        return response(['success' => true, 'message' => "Berhasil mengirim undangan!", "data" => $undangan], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kelompok = $this->kelompokService->getKelompokById($id);
        $undangan = $this->undanganService->getUndanganByKelompok($id);
        $mahasiswa = $this->mahasiswaService->getMahasiswaInvitaion($id);
        return response()->json([
            'success' => true,
            'message' => "Data kelompok ditemukan!",
            "data" => [
                "kelompok" => $kelompok,
                "undangan" => $undangan,
                'mahasiswa' => $mahasiswa
            ]
        ]);
        // return new KelompokResource($kelompok);
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
