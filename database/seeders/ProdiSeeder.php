<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $m_prodi = array(
            array('kode_prodi' => '11', 'nama' => 'D3-Teknik Pengolahan Sawit', 'singkatan' => 'TPS', 'jenjang' => 'D3', 'kaprodi' => '0'),
            array('kode_prodi' => '12', 'nama' => 'D3-Perbaikan Dan Perawatan Mesin', 'singkatan' => 'PPM', 'jenjang' => 'D3', 'kaprodi' => '14'),
            array('kode_prodi' => '13', 'nama' => 'D3-Teknik Informatika', 'singkatan' => 'TIF', 'jenjang' => 'D3', 'kaprodi' => '1'),
            array('kode_prodi' => '14', 'nama' => 'D4-Administrasi Bisnis Internasional', 'singkatan' => 'ABI', 'jenjang' => 'D4', 'kaprodi' => '11'),
            array('kode_prodi' => '121', 'nama' => 'D2-Teknik Pengolahan Kelapa Sawit', 'singkatan' => 'TPKS', 'jenjang' => 'D2', 'kaprodi' => '0'),
            array('kode_prodi' => '54304', 'nama' => 'D4-Manajemen Agribisnis', 'singkatan' => 'MAB', 'jenjang' => 'D4', 'kaprodi' => '0'),
            array('kode_prodi' => '54357', 'nama' => 'D4-Pengolahan Perkebunan', 'singkatan' => 'PP', 'jenjang' => 'D4', 'kaprodi' => '0'),
            array('kode_prodi' => '63316', 'nama' => 'D4-Teknologi Rekayasa Logistik', 'singkatan' => 'TRL', 'jenjang' => 'D4', 'kaprodi' => '0')
        );

        Prodi::insert($m_prodi);
    }
}
