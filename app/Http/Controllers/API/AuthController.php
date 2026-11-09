<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\AuthServices;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct(private AuthServices $authServices) {}

    public function auth(Request $request)
    {
        return $this->authServices->login($request->post());
    }

    public function logout(Request $request)
    {
        return $this->authServices->logout();
    }
}
