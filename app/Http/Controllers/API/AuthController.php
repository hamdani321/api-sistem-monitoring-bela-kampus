<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        $credentials = $request->post();

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response([
                "success" => true,
                'message' => "berhasil login",
                'user' => new UserResource($user),
                'roles' => $user->getRoleNames(),
                'token' => $user->createToken("auth_token")->plainTextToken
            ], 200);
        }

        return response([
            "success" => false,
            'message' => 'user tidak ditemukan!'
        ], 404);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response([
            'status' => true,
            'message' => "Logout berhasil"
        ]);
    }
}
