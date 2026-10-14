<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSekolahRequest;
use App\Http\Resources\SekolahResource;
use App\Services\SekolahServices;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function __construct(private SekolahServices $sekolahServices) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SekolahResource::collection($this->sekolahServices->getSekolah());
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
    public function store(StoreSekolahRequest $request)
    {
        $dataSekolah = $request->validated();
        $sekolah = $this->sekolahServices->createSekolah($dataSekolah);
        return response([
            'message' => "Berhasil simpan sekolah!",
            "data" => $sekolah
        ]);
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
