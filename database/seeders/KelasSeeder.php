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
            array('id' => '1', 'nama' => 'PPM A 2019', 'prodi_id' => '12', 'dosen_id' => '16'),
            array('id' => '2', 'nama' => 'PPM B 2019', 'prodi_id' => '12', 'dosen_id' => '12'),
            array('id' => '3', 'nama' => 'TPS A 2019', 'prodi_id' => '11', 'dosen_id' => '10'),
            array('id' => '4', 'nama' => 'TPS B 2019', 'prodi_id' => '11', 'dosen_id' => '9'),
            array('id' => '5', 'nama' => 'TIF A 2019', 'prodi_id' => '13', 'dosen_id' => '1'),
            array('id' => '6', 'nama' => 'TIF B 2019', 'prodi_id' => '13', 'dosen_id' => '2'),
            array('id' => '7', 'nama' => 'TIF 2 ', 'prodi_id' => '13', 'dosen_id' => '1'),
            array('id' => '8', 'nama' => 'PPM 2018 ', 'prodi_id' => '12', 'dosen_id' => '13'),
            array('id' => '9', 'nama' => 'TPS 2018 ', 'prodi_id' => '11', 'dosen_id' => '11'),
            array('id' => '10', 'nama' => 'ABI 1', 'prodi_id' => '14', 'dosen_id' => '18'),
            array('id' => '11', 'nama' => 'ABI 2 2019', 'prodi_id' => '14', 'dosen_id' => '17'),
            array('id' => '12', 'nama' => 'TPS A 2020 ', 'prodi_id' => '11', 'dosen_id' => '7'),
            array('id' => '13', 'nama' => 'TPS B 2020', 'prodi_id' => '11', 'dosen_id' => '6'),
            array('id' => '14', 'nama' => 'PPM A 2020', 'prodi_id' => '12', 'dosen_id' => '20'),
            array('id' => '15', 'nama' => 'PPM B 2020', 'prodi_id' => '12', 'dosen_id' => '14'),
            array('id' => '16', 'nama' => 'TIF A 2020', 'prodi_id' => '13', 'dosen_id' => '19'),
            array('id' => '17', 'nama' => 'TIF B 2020', 'prodi_id' => '13', 'dosen_id' => '5'),
            array('id' => '18', 'nama' => 'ABI 2020', 'prodi_id' => '14', 'dosen_id' => '21'),
            array('id' => '19', 'nama' => 'TPS A 2021', 'prodi_id' => '11', 'dosen_id' => '22'),
            array('id' => '20', 'nama' => 'TPS B 2021', 'prodi_id' => '11', 'dosen_id' => '11'),
            array('id' => '21', 'nama' => 'PPM A 2021', 'prodi_id' => '12', 'dosen_id' => '23'),
            array('id' => '22', 'nama' => 'PPM B 2021', 'prodi_id' => '12', 'dosen_id' => '13'),
            array('id' => '23', 'nama' => 'TIF A 2021', 'prodi_id' => '13', 'dosen_id' => '2'),
            array('id' => '24', 'nama' => 'TIF B 2021', 'prodi_id' => '13', 'dosen_id' => '1'),
            array('id' => '25', 'nama' => 'ABI 2021', 'prodi_id' => '14', 'dosen_id' => '24'),
            array('id' => '26', 'nama' => 'TPS A 2022', 'prodi_id' => '11', 'dosen_id' => '10'),
            array('id' => '27', 'nama' => 'TPS B 2022', 'prodi_id' => '11', 'dosen_id' => '9'),
            array('id' => '28', 'nama' => 'PPM A 2022', 'prodi_id' => '12', 'dosen_id' => '16'),
            array('id' => '29', 'nama' => 'PPM B 2022', 'prodi_id' => '12', 'dosen_id' => '12'),
            array('id' => '30', 'nama' => 'TIF A 2022', 'prodi_id' => '13', 'dosen_id' => '30'),
            array('id' => '31', 'nama' => 'TIF B 2022', 'prodi_id' => '13', 'dosen_id' => '29'),
            array('id' => '32', 'nama' => 'ABI 2022', 'prodi_id' => '14', 'dosen_id' => '18'),
            array('id' => '33', 'nama' => 'TPKS 2022', 'prodi_id' => '121', 'dosen_id' => '33'),
            array('id' => '97', 'nama' => 'TPS A 2023', 'prodi_id' => '11', 'dosen_id' => '7'),
            array('id' => '98', 'nama' => 'TPS B 2023', 'prodi_id' => '11', 'dosen_id' => '8'),
            array('id' => '99', 'nama' => 'TPS C 2023', 'prodi_id' => '11', 'dosen_id' => '6'),
            array('id' => '100', 'nama' => 'PPM A 2023', 'prodi_id' => '12', 'dosen_id' => '14'),
            array('id' => '101', 'nama' => 'PPM B 2023', 'prodi_id' => '12', 'dosen_id' => '20'),
            array('id' => '102', 'nama' => 'TIF A 2023', 'prodi_id' => '13', 'dosen_id' => '30'),
            array('id' => '103', 'nama' => 'TIF B 2023', 'prodi_id' => '13', 'dosen_id' => '5'),
            array('id' => '104', 'nama' => 'ABI 2023', 'prodi_id' => '14', 'dosen_id' => '17'),
            array('id' => '110', 'nama' => 'TPKS 2023', 'prodi_id' => '121', 'dosen_id' => '37'),
            array('id' => '111', 'nama' => 'TPS A 2024', 'prodi_id' => '11', 'dosen_id' => '22'),
            array('id' => '112', 'nama' => 'TPS B 2024', 'prodi_id' => '11', 'dosen_id' => '11'),
            array('id' => '113', 'nama' => 'TPS C 2024', 'prodi_id' => '11', 'dosen_id' => '26'),
            array('id' => '114', 'nama' => 'PPM A 2024', 'prodi_id' => '12', 'dosen_id' => '13'),
            array('id' => '115', 'nama' => 'PPM B 2024', 'prodi_id' => '12', 'dosen_id' => '20'),
            array('id' => '116', 'nama' => 'PPM C 2024', 'prodi_id' => '12', 'dosen_id' => '23'),
            array('id' => '117', 'nama' => 'TIF A 2024', 'prodi_id' => '13', 'dosen_id' => '1'),
            array('id' => '118', 'nama' => 'TIF B 2024', 'prodi_id' => '13', 'dosen_id' => '2'),
            array('id' => '119', 'nama' => 'ABI 2024', 'prodi_id' => '14', 'dosen_id' => '21'),
            array('id' => '120', 'nama' => 'TPKS 2024', 'prodi_id' => '121', 'dosen_id' => '38'),
            array('id' => '121', 'nama' => 'MAB 2024', 'prodi_id' => '54304', 'dosen_id' => '51'),
            array('id' => '122', 'nama' => 'PP 2024', 'prodi_id' => '54357', 'dosen_id' => '52'),
            array('id' => '123', 'nama' => 'TRL 2024', 'prodi_id' => '63316', 'dosen_id' => '46'),
            array('id' => '124', 'nama' => 'TPS A 2025', 'prodi_id' => '11', 'dosen_id' => '10'),
            array('id' => '125', 'nama' => 'TPS B 2025', 'prodi_id' => '11', 'dosen_id' => '9'),
            array('id' => '126', 'nama' => 'TPS C 2025', 'prodi_id' => '11', 'dosen_id' => '48'),
            array('id' => '127', 'nama' => 'PPM A 2025', 'prodi_id' => '12', 'dosen_id' => '39'),
            array('id' => '128', 'nama' => 'PPM B 2025', 'prodi_id' => '12', 'dosen_id' => '12'),
            array('id' => '129', 'nama' => 'PPM C 2025', 'prodi_id' => '12', 'dosen_id' => '16'),
            array('id' => '130', 'nama' => 'TIF A 2025', 'prodi_id' => '13', 'dosen_id' => '29'),
            array('id' => '131', 'nama' => 'TIF B 2025', 'prodi_id' => '13', 'dosen_id' => '30'),
            array('id' => '132', 'nama' => 'ABI 2025', 'prodi_id' => '14', 'dosen_id' => '24'),
            array('id' => '133', 'nama' => 'TPKS 2025', 'prodi_id' => '121', 'dosen_id' => '38'),
            array('id' => '134', 'nama' => 'MAB 2025', 'prodi_id' => '54304', 'dosen_id' => '50'),
            array('id' => '135', 'nama' => 'PP A 2025', 'prodi_id' => '54357', 'dosen_id' => '53'),
            array('id' => '136', 'nama' => 'TRL 2025', 'prodi_id' => '63316', 'dosen_id' => '54'),
            array('id' => '137', 'nama' => 'PP B 2025', 'prodi_id' => '54357', 'dosen_id' => '55'),
            array('id' => '138', 'nama' => 'TPS D 2024', 'prodi_id' => '11', 'dosen_id' => '25'),
            array('id' => '139', 'nama' => 'RPL TPS 2025', 'prodi_id' => '11', 'dosen_id' => '7')
        );

        Kelas::insert($m_kelas);
    }
}
