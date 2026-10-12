<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\DashboardServices;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(private DashboardServices $dashboardServices) {}

    public function index()
    {
        $data = $this->dashboardServices->getDataDashboard();
        return response([
            'message' => "Data berhasil didapatkan!",
            'data' => $data
        ]);
    }
}
