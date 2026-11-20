<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $m_kelas = array(
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM A 2019', 'prodi_id' => '12', 'dosen_id' => '16'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM B 2019', 'prodi_id' => '12', 'dosen_id' => '12'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS A 2019', 'prodi_id' => '11', 'dosen_id' => '10'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS B 2019', 'prodi_id' => '11', 'dosen_id' => '9'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF A 2019', 'prodi_id' => '13', 'dosen_id' => '1'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF B 2019', 'prodi_id' => '13', 'dosen_id' => '2'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF 2 ', 'prodi_id' => '13', 'dosen_id' => '1'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM 2018 ', 'prodi_id' => '12', 'dosen_id' => '13'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS 2018 ', 'prodi_id' => '11', 'dosen_id' => '11'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'ABI 1', 'prodi_id' => '14', 'dosen_id' => '18'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'ABI 2 2019', 'prodi_id' => '14', 'dosen_id' => '17'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS A 2020 ', 'prodi_id' => '11', 'dosen_id' => '7'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS B 2020', 'prodi_id' => '11', 'dosen_id' => '6'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM A 2020', 'prodi_id' => '12', 'dosen_id' => '20'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM B 2020', 'prodi_id' => '12', 'dosen_id' => '14'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF A 2020', 'prodi_id' => '13', 'dosen_id' => '19'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF B 2020', 'prodi_id' => '13', 'dosen_id' => '5'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'ABI 2020', 'prodi_id' => '14', 'dosen_id' => '21'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS A 2021', 'prodi_id' => '11', 'dosen_id' => '22'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS B 2021', 'prodi_id' => '11', 'dosen_id' => '11'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM A 2021', 'prodi_id' => '12', 'dosen_id' => '23'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM B 2021', 'prodi_id' => '12', 'dosen_id' => '13'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF A 2021', 'prodi_id' => '13', 'dosen_id' => '2'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF B 2021', 'prodi_id' => '13', 'dosen_id' => '1'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'ABI 2021', 'prodi_id' => '14', 'dosen_id' => '24'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS A 2022', 'prodi_id' => '11', 'dosen_id' => '10'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS B 2022', 'prodi_id' => '11', 'dosen_id' => '9'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM A 2022', 'prodi_id' => '12', 'dosen_id' => '16'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM B 2022', 'prodi_id' => '12', 'dosen_id' => '12'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF A 2022', 'prodi_id' => '13', 'dosen_id' => '30'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF B 2022', 'prodi_id' => '13', 'dosen_id' => '29'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'ABI 2022', 'prodi_id' => '14', 'dosen_id' => '18'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPKS 2022', 'prodi_id' => '121', 'dosen_id' => '33'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS A 2023', 'prodi_id' => '11', 'dosen_id' => '7'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS B 2023', 'prodi_id' => '11', 'dosen_id' => '8'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS C 2023', 'prodi_id' => '11', 'dosen_id' => '6'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM A 2023', 'prodi_id' => '12', 'dosen_id' => '14'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM B 2023', 'prodi_id' => '12', 'dosen_id' => '20'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF A 2023', 'prodi_id' => '13', 'dosen_id' => '30'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF B 2023', 'prodi_id' => '13', 'dosen_id' => '5'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'ABI 2023', 'prodi_id' => '14', 'dosen_id' => '17'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPKS 2023', 'prodi_id' => '121', 'dosen_id' => '37'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS A 2024', 'prodi_id' => '11', 'dosen_id' => '22'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS B 2024', 'prodi_id' => '11', 'dosen_id' => '11'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS C 2024', 'prodi_id' => '11', 'dosen_id' => '26'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM A 2024', 'prodi_id' => '12', 'dosen_id' => '13'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM B 2024', 'prodi_id' => '12', 'dosen_id' => '20'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM C 2024', 'prodi_id' => '12', 'dosen_id' => '23'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF A 2024', 'prodi_id' => '13', 'dosen_id' => '1'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF B 2024', 'prodi_id' => '13', 'dosen_id' => '2'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'ABI 2024', 'prodi_id' => '14', 'dosen_id' => '21'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPKS 2024', 'prodi_id' => '121', 'dosen_id' => '38'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'MAB 2024', 'prodi_id' => '54304', 'dosen_id' => '51'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PP 2024', 'prodi_id' => '54357', 'dosen_id' => '52'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TRL 2024', 'prodi_id' => '63316', 'dosen_id' => '46'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS A 2025', 'prodi_id' => '11', 'dosen_id' => '10'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS B 2025', 'prodi_id' => '11', 'dosen_id' => '9'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS C 2025', 'prodi_id' => '11', 'dosen_id' => '48'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM A 2025', 'prodi_id' => '12', 'dosen_id' => '39'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM B 2025', 'prodi_id' => '12', 'dosen_id' => '12'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PPM C 2025', 'prodi_id' => '12', 'dosen_id' => '16'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF A 2025', 'prodi_id' => '13', 'dosen_id' => '29'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TIF B 2025', 'prodi_id' => '13', 'dosen_id' => '30'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'ABI 2025', 'prodi_id' => '14', 'dosen_id' => '24'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPKS 2025', 'prodi_id' => '121', 'dosen_id' => '38'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'MAB 2025', 'prodi_id' => '54304', 'dosen_id' => '50'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PP A 2025', 'prodi_id' => '54357', 'dosen_id' => '53'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TRL 2025', 'prodi_id' => '63316', 'dosen_id' => '54'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'PP B 2025', 'prodi_id' => '54357', 'dosen_id' => '55'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'TPS D 2024', 'prodi_id' => '11', 'dosen_id' => '25'),
            array("created_at" => now(), 'updated_at' => now(), 'nama' => 'RPL TPS 2025', 'prodi_id' => '11', 'dosen_id' => '7')
        );

        $dataStore = [];
        foreach ($m_kelas as $key => $data) {
            $dataStore[] = [
                "id" => Str::uuid(),
                "nama" => $data['nama'],
                'prodi_id' => $data['prodi_id'],
                "dosen_id" => $data['dosen_id'],
                "created_at" => now(),
                'updated_at' => now(),
            ];
        }

        Kelas::insert($dataStore);
    }
}
