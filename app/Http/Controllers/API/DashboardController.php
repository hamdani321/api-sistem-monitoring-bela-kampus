<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\DashboardServices;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(private DashboardServices $dashboardServices) {}

    public function dashboard_admin()
    {
        return $this->dashboardServices->dashboardAdmin();
    }

    public function dashboard_mahasiswa()
    {
        return $this->dashboardServices->dashboardMahasiswa();
    }
}
