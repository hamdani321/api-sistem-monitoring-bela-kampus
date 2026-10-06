<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Mahasiswa\MahasiswaInvitationResource;
use App\Http\Resources\Mahasiswa\MahasiswaResource;
use App\Models\Mahasiswa;
use App\Services\MahasiswaServices;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    public function __construct(private MahasiswaServices $mahasiswaService) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return MahasiswaResource::collection($this->mahasiswaService->getMahasiswa());
        // return MahasiswaResource::collection(Mahasiswa::get());
    }

    public function get_mahasiswa_invitation(string $kelompokId)
    {
        return MahasiswaInvitationResource::collection($this->mahasiswaService->getMahasiswaInvitaion($kelompokId));
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
