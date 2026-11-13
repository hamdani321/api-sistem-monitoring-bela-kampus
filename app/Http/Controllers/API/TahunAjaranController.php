<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TahunAjaranRequest;
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
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TahunAjaranRequest $request)
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
        return $this->tahunAjaranService->findTahunAjaran($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TahunAjaranRequest $request, string $id)
    {
        return $this->tahunAjaranService->editTahunAjaran($id, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
