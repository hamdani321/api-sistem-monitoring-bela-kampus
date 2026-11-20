<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportKegiatanRequest;
use App\Http\Resources\ReportKegiatanResource;
use App\Models\ReportKegiatan;
use App\Services\ReportKegiatanServices;
use Illuminate\Http\Request;

class ReportKegiatanController extends Controller
{

    public function __construct(private ReportKegiatanServices $reportKegiatanServices) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(ReportKegiatanRequest $request)
    {

    // return response(['message'=> "Hlkj", 'data' => $request->validated()]);
        return $this->reportKegiatanServices->createReportKegiatan($request->validated());
        // $dataValid = $request->validated();
        // return response($this->reportKegiatanServices->createReportKegiatan($dataValid));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reportKegiatan = ReportKegiatan::find($id);
        $this->authorize('view', $reportKegiatan);
        $reportKegiatan = ReportKegiatan::with(['mahasiswa', 'foto'])->find($id);
        return response(['message' => "Berhasil ambil data report kegiatan!", "data" => $reportKegiatan]);
        // return new ReportKegiatanResource($reportKegiatan);
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
