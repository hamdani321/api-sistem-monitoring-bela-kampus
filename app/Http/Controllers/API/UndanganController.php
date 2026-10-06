<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UndanganResource;
use App\Services\UndanganServices;
use Illuminate\Http\Request;

class UndanganController extends Controller
{

    public function __construct(private UndanganServices $undanganService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return response(Auth::user()->load('mahasiswa')['mahasiswa']['nim']);
        return UndanganResource::collection($this->undanganService->getAllUndangan());
        // return response()->json([
        //     "success" => true,
        //     "data" => $this->undanganService->getAllUndangan()
        // ]);
    }

    public function undangan_by_kelompok(string $kelompokId)
    {
        return UndanganResource::collection($this->undanganService->getUndanganByKelompok($kelompokId));
    }

    public function accept_join_group(Request $request)
    {
        $dataValid = $request->validate([
            "registrasi_id" => ['required'],
            "kelompok_id" => ['required'],
            "undangan_id" => ['required'],
        ], [
            "*.required" => [':attribute tidak boleh kosong!']
        ]);
        $kelompok = $this->undanganService->acceptJoinGroup($dataValid);
        return response()->json([
            "message" => "Berhasil terima undangan!",
            "data" => $kelompok
        ], 201);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
