<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrasiPortalRequest;
use App\Http\Resources\RegistrasiResource;
use App\Http\Resources\RegistrasiWithReportResource;
use App\Models\Registrasi;
use App\Models\RegistrasiAnggota;
use App\Services\RegistrasiServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrasiController extends Controller
{
    public function __construct(private RegistrasiServices $registrasiService) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataRegistrasi = $this->registrasiService->getRegistrasi();
        return RegistrasiResource::collection($dataRegistrasi);
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
    public function store(RegistrasiPortalRequest $request)
    {
        $dataValid = $request->validated();
        $registrasi = $this->registrasiService->createRegistrasi($dataValid);
        return response([
            'success' => true,
            'message' => "Berhasil registrasi!",
            'data' => $registrasi
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new RegistrasiWithReportResource($this->registrasiService->getRegistrasiById($id));
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
