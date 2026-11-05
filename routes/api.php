<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DashboardController;
use App\Http\Controllers\API\KelasController;
// use App\Http\Controllers\API\KelompokController;
use App\Http\Controllers\API\SekolahController;

use App\Http\Controllers\API\MahasiswaController;
use App\Http\Controllers\API\PortalController;
use App\Http\Controllers\API\ProdiController;
use App\Http\Controllers\API\RegistrasiAnggotaController;
use App\Http\Controllers\API\RegistrasiController;
use App\Http\Controllers\API\ReportKegiatanController;
use App\Http\Controllers\API\TahunAjaranController;
// use App\Http\Controllers\API\UndanganController;
use App\Http\Controllers\API\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UsersController::class, 'user'])->middleware('auth:sanctum');

Route::middleware("auth:sanctum")->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);

    //Sekolah
    // Route::resource("sekolah", SekolahController::class);
    Route::apiResource('sekolah', SekolahController::class);

    //mahasiswa
    // Route::resource("mahasiswa", MahasiswaController::class);
    Route::apiResource('mahasiswa', MahasiswaController::class);
    Route::get('/mahasiswa/invitation/{kelompokId}', [MahasiswaController::class, "get_mahasiswa_invitation"]);

    //kelompok
    // Route::resource("kelompok", KelompokController::class);
    // Route::post('kelompok/invite-group', [KelompokController::class, "invite_group"]);

    //portal
    // Route::resource('portal', PortalController::class);
    Route::apiResource('portal', PortalController::class);
    Route::get('/portal/{portalId}/kelompok/{kelompokI}', [PortalController::class, 'get_kelompok_portal']);
    Route::post('/portal/registrasi', [PortalController::class, 'registrasi_portal']);
    Route::get("/portal/registrasi/{portalId}", [PortalController::class, "get_portal_by_id"]);
    Route::get('/data-portal', [PortalController::class, 'get_data_portal']);

    //undangan
    // Route::resource("undangan", UndanganController::class);
    // Route::get('undangan/mahasiswa/{kelompokId}', [UndanganController::class, "undangan_by_kelompok"]);
    // Route::post('undangan/accept-join-group', [UndanganController::class, "accept_join_group"]);

    //registrasi
    // Route::resource('registrasi', RegistrasiController::class);
    Route::apiResource('registrasi', RegistrasiController::class);

    //tahun ajaran
    // Route::resource("tahun-ajaran", TahunAjaranController::class);
    Route::apiResource('tahun-ajaran', TahunAjaranController::class);

    //users
    // Route::resource("users", UsersController::class);
    Route::apiResource('users', UsersController::class);

    //Report Kegiatan
    // Route::resource('report-kegiatan', ReportKegiatanController::class);
    Route::apiResource("report-kegiatan", ReportKegiatanController::class);

    //Registrasi Anggota
    Route::get('registrasi-anggota/{registrasiId}', [RegistrasiAnggotaController::class, 'get_anggota_registrasi']);

    //Kelas
    // Route::resource('kelas', KelasController::class);
    Route::apiResource('kelas', KelasController::class);

    //Prodi
    // Route::resource('prodi', ProdiController::class);
    Route::apiResource("prodi", ProdiController::class);

    //logout
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/auth', [AuthController::class, 'auth']);
