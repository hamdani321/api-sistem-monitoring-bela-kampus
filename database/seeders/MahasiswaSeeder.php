<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $m_mahasiswa = array(
            array('id' => '1', 'nim' => '201811001', 'nama' => 'Nesmi Arianti Hasibuana', 'email' => 'nesmi2018.tps@poltek-kampar.ac.id', 'kode_prodi' => '11', 'jenis_kelamin' => "Perempuan", 'kelas_id' => '9', 'created_at' => now(), 'updated_at' => now(),),
            array('id' => '2', 'nim' => '201811002', 'nama' => 'Sugiarto', 'email' => 'sugiarto2018.tps@poltek-kampar.ac.id', 'kode_prodi' => '11', 'jenis_kelamin' => "Laki-Laki", 'kelas_id' => '9', 'created_at' => now(), 'updated_at' => now(),),
            array('id' => '3', 'nim' => '201811003', 'nama' => 'Sesti Yopita', 'email' => 'sesti2018.tps@poltek-kampar.ac.id', 'kode_prodi' => '11', 'jenis_kelamin' => "Perempuan", 'kelas_id' => '9', 'created_at' => now(), 'updated_at' => now(),),
            array('id' => '4', 'nim' => '201811004', 'nama' => 'Alnando Nikolas Sagala', 'email' => 'alnando2018.tps@poltek-kampar.ac.id', 'kode_prodi' => '11', 'jenis_kelamin' => "Laki-Laki", 'kelas_id' => '9', 'created_at' => now(), 'updated_at' => now(),),
            array('id' => '5', 'nim' => '201811005', 'nama' => 'Fitri Hidayani', 'email' => 'fitrihidayani2018.tps@poltek-kampar.ac.id', 'kode_prodi' => '11', 'jenis_kelamin' => "Perempuan", 'kelas_id' => '9', 'created_at' => now(), 'updated_at' => now(),),
            array('id' => '6', 'nim' => '201811006', 'nama' => 'Herliana Putri', 'email' => 'herliana2018.tps@poltek-kampar.ac.id', 'kode_prodi' => '11', 'jenis_kelamin' => "Perempuan", 'kelas_id' => '9', 'created_at' => now(), 'updated_at' => now(),),
            array('id' => '7', 'nim' => '201811007', 'nama' => 'Muhammad Ahsan Jihadan', 'email' => 'muhammadahsan2018.tps@poltek-kampar.ac.id', 'kode_prodi' => '11', 'jenis_kelamin' => "Laki-Laki", 'kelas_id' => '9', 'created_at' => now(), 'updated_at' => now(),),
            array('id' => '8', 'nim' => '201811009', 'nama' => 'Tedja Hadi Pratama', 'email' => 'tedja2018.tps@poltek-kampar.ac.id', 'kode_prodi' => '11', 'jenis_kelamin' => "Laki-Laki", 'kelas_id' => '9', 'created_at' => now(), 'updated_at' => now(),),
            array('id' => '9', 'nim' => '201811010', 'nama' => 'Rio ibnu ari febrianta', 'email' => 'rio2018.tps@poltek-kampar.ac.id', 'kode_prodi' => '11', 'jenis_kelamin' => "Laki-Laki", 'kelas_id' => '9', 'created_at' => now(), 'updated_at' => now(),),
            array('id' => '10', 'nim' => '201811011', 'nama' => 'Nur Hasmi', 'email' => 'nur2018.tps@poltek-kampar.ac.id', 'kode_prodi' => '11', 'jenis_kelamin' => "Perempuan", 'kelas_id' => '9', 'created_at' => now(), 'updated_at' => now(),),
      );

        $dataStore = [];
        foreach ($m_mahasiswa as $key => $data) {
            $dataStore[] = [
                'id' => Str::uuid(),
                'nim' => $data['nim'],
                'nama' => $data['nama'],
                'email' => $data['email'],
                'kode_prodi' => $data['kode_prodi'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'kelas_id' => $data['kelas_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        Mahasiswa::insert($dataStore);
    }
}
