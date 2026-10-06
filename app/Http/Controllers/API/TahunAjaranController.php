<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTahunAjaranRequest;
use App\Http\Resources\TahunAjaranResource;
use App\Services\TahunAjaranServices;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{

    public function __construct(private TahunAjaranServices $tahunAjaranService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TahunAjaranResource::collection($this->tahunAjaranService->getTahunAjaran());
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
    public function store(StoreTahunAjaranRequest $request)
    {
        $dataValid = $request->validated();
        $tahunAjaran = $this->tahunAjaranService->createTahunAjaran($dataValid);
        return response()->json(["message" => "Berhasil simpan data!", "data" => $tahunAjaran], 201);
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
