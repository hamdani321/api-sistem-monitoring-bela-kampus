<?php

namespace App\Services;

use App\Http\Resources\Mahasiswa\MahasiswaResource;
use App\Models\Mahasiswa;
use App\Models\User;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MahasiswaServices
{
    public function getMahasiswa()
    {
        return Mahasiswa::mahasiswa();
    }

    public function getMahasiswaInvitaion(string $kelompokId)
    {
        return Mahasiswa::MahasiswaInvitation($kelompokId);
    }

    public function createMahasiswa(array $mahasiswa)
    {
        DB::beginTransaction();
        try {

            $newMahasiswa = Mahasiswa::create([
                "nama" => $mahasiswa['nama'],
                'email' => $mahasiswa['email'],
                'nim' => $mahasiswa['nim'],
                'kode_prodi' => $mahasiswa['kode_prodi'],
                'kelas_id' => $mahasiswa['kelas_id'],
                'jenis_kelamin' => $mahasiswa['jenis_kelamin'],
            ]);
            $newUser = User::create([
                "name" => $mahasiswa['nama'],
                'email' => $mahasiswa['email'],
                'password' => bcrypt($mahasiswa['password'])
            ]);
            $newUser->assignRole('mahasiswa');
            DB::commit();
            return response(['message' => 'Berhasil tambah mahasiswa', 'data' => new MahasiswaResource($newMahasiswa)], Response::HTTP_CREATED);
        } catch (Exception $exception) {
            DB::rollBack();
            return response(['message' => $exception->getMessage()], 500);
        }
    }
}
