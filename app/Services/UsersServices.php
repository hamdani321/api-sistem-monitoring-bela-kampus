<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UsersServices
{
    public function getUsers()
    {
        return User::get();
    }
    public function resetPassword(string $userId) {
        $user = User::find($userId);
        if($user) {
            $mahasiswa = $user->load('mahasiswa')['mahasiswa'];
            $user->update(['password' => Hash::make($mahasiswa['nim'])]);
            return response(['message' => "Berhasil reset password!", "data" => $user], Response::HTTP_OK);
        }
        throw new HttpException("Ada kesalahan!");
    }
}
