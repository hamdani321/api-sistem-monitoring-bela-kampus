<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DashboardController;
use App\Http\Controllers\API\KelompokController;
use App\Http\Controllers\API\SekolahController;

use App\Http\Controllers\API\MahasiswaController;
use App\Http\Controllers\API\PortalController;
use App\Http\Controllers\API\RegistrasiAnggotaController;
use App\Http\Controllers\API\RegistrasiController;
use App\Http\Controllers\API\ReportKegiatanController;
use App\Http\Controllers\API\TahunAjaranController;
use App\Http\Controllers\API\UndanganController;
use App\Http\Controllers\API\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return response()->json([
        'user' => $request->user(),
        'roles' => $request->user()->getRoleNames()
    ]);
})->middleware('auth:sanctum');

Route::middleware("auth:sanctum")->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    //Sekolah
    Route::resource("sekolah", SekolahController::class);

    //mahasiswa
    Route::resource("mahasiswa", MahasiswaController::class);
    Route::get('/mahasiswa/invitation/{kelompokId}', [MahasiswaController::class, "get_mahasiswa_invitation"]);

    //kelompok
    Route::resource("kelompok", KelompokController::class);
    Route::post('kelompok/invite-group', [KelompokController::class, "invite_group"]);

    //portal
    Route::resource('portal', PortalController::class);
    Route::get('/portal/{portalId}/kelompok/{kelompokI}', [PortalController::class, 'get_kelompok_portal']);
    Route::post('/portal/registrasi', [PortalController::class, 'registrasi_portal']);
    Route::get("/portal/registrasi/{portalId}", [PortalController::class, "get_portal_by_id"]);

    //undangan
    Route::resource("undangan", UndanganController::class);
    Route::get('undangan/mahasiswa/{kelompokId}', [UndanganController::class, "undangan_by_kelompok"]);
    Route::post('undangan/accept-join-group', [UndanganController::class, "accept_join_group"]);

    //registrasi
    Route::resource('registrasi', RegistrasiController::class);

    //tahun ajaran
    Route::resource("tahun-ajaran", TahunAjaranController::class);

    //users
    Route::resource("users", UsersController::class);

    //Report Kegiatan
    Route::resource('report-kegiatan', ReportKegiatanController::class);

    //Registrasi Anggota
    Route::get('registrasi-anggota/{registrasiId}', [RegistrasiAnggotaController::class, 'get_anggota_registrasi']);

    //logout
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/auth', [AuthController::class, 'auth']);
