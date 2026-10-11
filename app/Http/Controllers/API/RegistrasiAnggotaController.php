<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\RegistrasiAnggotaServices;
use Illuminate\Http\Request;

class RegistrasiAnggotaController extends Controller
{

public function __construct(private RegistrasiAnggotaServices $registrasiAnggota)
{
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function get_anggota_registrasi(string $registrasiId) {

        return response(['data' => $this->registrasiAnggota->getAnggotaRegistrasiById($registrasiId)]);

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
