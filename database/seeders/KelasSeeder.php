<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $m_kelas = array(
            array("created_at" => now(), 'updated_at' => now(), 'id' => '1', 'nama' => 'PPM A 2019', 'prodi_id' => '12', 'dosen_id' => '16'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '2', 'nama' => 'PPM B 2019', 'prodi_id' => '12', 'dosen_id' => '12'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '3', 'nama' => 'TPS A 2019', 'prodi_id' => '11', 'dosen_id' => '10'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '4', 'nama' => 'TPS B 2019', 'prodi_id' => '11', 'dosen_id' => '9'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '5', 'nama' => 'TIF A 2019', 'prodi_id' => '13', 'dosen_id' => '1'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '6', 'nama' => 'TIF B 2019', 'prodi_id' => '13', 'dosen_id' => '2'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '7', 'nama' => 'TIF 2 ', 'prodi_id' => '13', 'dosen_id' => '1'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '8', 'nama' => 'PPM 2018 ', 'prodi_id' => '12', 'dosen_id' => '13'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '9', 'nama' => 'TPS 2018 ', 'prodi_id' => '11', 'dosen_id' => '11'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '10', 'nama' => 'ABI 1', 'prodi_id' => '14', 'dosen_id' => '18'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '11', 'nama' => 'ABI 2 2019', 'prodi_id' => '14', 'dosen_id' => '17'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '12', 'nama' => 'TPS A 2020 ', 'prodi_id' => '11', 'dosen_id' => '7'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '13', 'nama' => 'TPS B 2020', 'prodi_id' => '11', 'dosen_id' => '6'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '14', 'nama' => 'PPM A 2020', 'prodi_id' => '12', 'dosen_id' => '20'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '15', 'nama' => 'PPM B 2020', 'prodi_id' => '12', 'dosen_id' => '14'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '16', 'nama' => 'TIF A 2020', 'prodi_id' => '13', 'dosen_id' => '19'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '17', 'nama' => 'TIF B 2020', 'prodi_id' => '13', 'dosen_id' => '5'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '18', 'nama' => 'ABI 2020', 'prodi_id' => '14', 'dosen_id' => '21'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '19', 'nama' => 'TPS A 2021', 'prodi_id' => '11', 'dosen_id' => '22'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '20', 'nama' => 'TPS B 2021', 'prodi_id' => '11', 'dosen_id' => '11'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '21', 'nama' => 'PPM A 2021', 'prodi_id' => '12', 'dosen_id' => '23'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '22', 'nama' => 'PPM B 2021', 'prodi_id' => '12', 'dosen_id' => '13'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '23', 'nama' => 'TIF A 2021', 'prodi_id' => '13', 'dosen_id' => '2'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '24', 'nama' => 'TIF B 2021', 'prodi_id' => '13', 'dosen_id' => '1'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '25', 'nama' => 'ABI 2021', 'prodi_id' => '14', 'dosen_id' => '24'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '26', 'nama' => 'TPS A 2022', 'prodi_id' => '11', 'dosen_id' => '10'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '27', 'nama' => 'TPS B 2022', 'prodi_id' => '11', 'dosen_id' => '9'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '28', 'nama' => 'PPM A 2022', 'prodi_id' => '12', 'dosen_id' => '16'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '29', 'nama' => 'PPM B 2022', 'prodi_id' => '12', 'dosen_id' => '12'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '30', 'nama' => 'TIF A 2022', 'prodi_id' => '13', 'dosen_id' => '30'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '31', 'nama' => 'TIF B 2022', 'prodi_id' => '13', 'dosen_id' => '29'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '32', 'nama' => 'ABI 2022', 'prodi_id' => '14', 'dosen_id' => '18'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '33', 'nama' => 'TPKS 2022', 'prodi_id' => '121', 'dosen_id' => '33'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '97', 'nama' => 'TPS A 2023', 'prodi_id' => '11', 'dosen_id' => '7'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '98', 'nama' => 'TPS B 2023', 'prodi_id' => '11', 'dosen_id' => '8'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '99', 'nama' => 'TPS C 2023', 'prodi_id' => '11', 'dosen_id' => '6'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '100', 'nama' => 'PPM A 2023', 'prodi_id' => '12', 'dosen_id' => '14'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '101', 'nama' => 'PPM B 2023', 'prodi_id' => '12', 'dosen_id' => '20'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '102', 'nama' => 'TIF A 2023', 'prodi_id' => '13', 'dosen_id' => '30'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '103', 'nama' => 'TIF B 2023', 'prodi_id' => '13', 'dosen_id' => '5'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '104', 'nama' => 'ABI 2023', 'prodi_id' => '14', 'dosen_id' => '17'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '110', 'nama' => 'TPKS 2023', 'prodi_id' => '121', 'dosen_id' => '37'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '111', 'nama' => 'TPS A 2024', 'prodi_id' => '11', 'dosen_id' => '22'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '112', 'nama' => 'TPS B 2024', 'prodi_id' => '11', 'dosen_id' => '11'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '113', 'nama' => 'TPS C 2024', 'prodi_id' => '11', 'dosen_id' => '26'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '114', 'nama' => 'PPM A 2024', 'prodi_id' => '12', 'dosen_id' => '13'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '115', 'nama' => 'PPM B 2024', 'prodi_id' => '12', 'dosen_id' => '20'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '116', 'nama' => 'PPM C 2024', 'prodi_id' => '12', 'dosen_id' => '23'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '117', 'nama' => 'TIF A 2024', 'prodi_id' => '13', 'dosen_id' => '1'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '118', 'nama' => 'TIF B 2024', 'prodi_id' => '13', 'dosen_id' => '2'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '119', 'nama' => 'ABI 2024', 'prodi_id' => '14', 'dosen_id' => '21'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '120', 'nama' => 'TPKS 2024', 'prodi_id' => '121', 'dosen_id' => '38'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '121', 'nama' => 'MAB 2024', 'prodi_id' => '54304', 'dosen_id' => '51'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '122', 'nama' => 'PP 2024', 'prodi_id' => '54357', 'dosen_id' => '52'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '123', 'nama' => 'TRL 2024', 'prodi_id' => '63316', 'dosen_id' => '46'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '124', 'nama' => 'TPS A 2025', 'prodi_id' => '11', 'dosen_id' => '10'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '125', 'nama' => 'TPS B 2025', 'prodi_id' => '11', 'dosen_id' => '9'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '126', 'nama' => 'TPS C 2025', 'prodi_id' => '11', 'dosen_id' => '48'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '127', 'nama' => 'PPM A 2025', 'prodi_id' => '12', 'dosen_id' => '39'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '128', 'nama' => 'PPM B 2025', 'prodi_id' => '12', 'dosen_id' => '12'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '129', 'nama' => 'PPM C 2025', 'prodi_id' => '12', 'dosen_id' => '16'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '130', 'nama' => 'TIF A 2025', 'prodi_id' => '13', 'dosen_id' => '29'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '131', 'nama' => 'TIF B 2025', 'prodi_id' => '13', 'dosen_id' => '30'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '132', 'nama' => 'ABI 2025', 'prodi_id' => '14', 'dosen_id' => '24'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '133', 'nama' => 'TPKS 2025', 'prodi_id' => '121', 'dosen_id' => '38'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '134', 'nama' => 'MAB 2025', 'prodi_id' => '54304', 'dosen_id' => '50'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '135', 'nama' => 'PP A 2025', 'prodi_id' => '54357', 'dosen_id' => '53'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '136', 'nama' => 'TRL 2025', 'prodi_id' => '63316', 'dosen_id' => '54'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '137', 'nama' => 'PP B 2025', 'prodi_id' => '54357', 'dosen_id' => '55'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '138', 'nama' => 'TPS D 2024', 'prodi_id' => '11', 'dosen_id' => '25'),
            array("created_at" => now(), 'updated_at' => now(), 'id' => '139', 'nama' => 'RPL TPS 2025', 'prodi_id' => '11', 'dosen_id' => '7')
        );

        Kelas::insert($m_kelas);
    }
}
