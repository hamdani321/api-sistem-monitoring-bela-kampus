<?php

namespace App\Services;

use App\Http\Resources\UserResource;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthServices
{
    public function login(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response([
                "success" => true,
                'message' => "berhasil login",
                'user' => new UserResource($user),
                'roles' => $user->getRoleNames(),
                'token' => $user->createToken("auth_token")->plainTextToken
            ], Response::HTTP_OK);
        }

        return response([
            "success" => false,
            'message' => 'user tidak ditemukan!'
        ], Response::HTTP_NOT_FOUND);
    }

    public function logout()
    {
        request()->user()->tokens()->delete();
        return response([
            'status' => true,
            'message' => "Logout berhasil"
        ], Response::HTTP_OK);
    }
}
