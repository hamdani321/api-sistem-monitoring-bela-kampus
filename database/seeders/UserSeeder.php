<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['email' => 'admin@poltek-kampar.ac.id', 'name' => 'admin', 'password' => Hash::make('123456'), 'created_at' => now(), 'updated_at' => now(),],
            ['email' => 'nesmi2018.tps@poltek-kampar.ac.id', 'name' => 'Nesmi Hasibuan', 'password' => Hash::make('123456'), 'created_at' => now(), 'updated_at' => now(),],
            ['email' => 'sugiarto2018.tps@poltek-kampar.ac.id', 'name' => 'Sugiarto', 'password' => Hash::make('123456'), 'created_at' => now(), 'updated_at' => now(),],
            ['email' => 'sesti2018.tps@poltek-kampar.ac.id', 'name' => 'Sesti Yopita', 'password' => Hash::make('123456'), 'created_at' => now(), 'updated_at' => now(),],
            ['email' => 'alnando2018.tps@poltek-kampar.ac.id', 'name' => 'Alnando Nikolas Sagala', 'password' => Hash::make('123456'), 'created_at' => now(), 'updated_at' => now(),],
            ['email' => 'fitrihidayani2018.tps@poltek-kampar.ac.id', 'name' => 'Fitri Hidayani', 'password' => Hash::make('123456'), 'created_at' => now(), 'updated_at' => now(),],
            ['email' => 'herliana2018.tps@poltek-kampar.ac.id', 'name' => 'Herliana', 'password' => Hash::make('123456'), 'created_at' => now(), 'updated_at' => now(),],
            ['email' => 'muhammadahsan2018.tps@poltek-kampar.ac.id', 'name' => 'Muhammad Ahsan', 'password' => Hash::make('123456'), 'created_at' => now(), 'updated_at' => now(),],
            ['email' => 'tedja2018.tps@poltek-kampar.ac.id', 'name' => 'Tedja', 'password' => Hash::make('123456'), 'created_at' => now(), 'updated_at' => now(),],
            ['email' => 'rio2018.tps@poltek-kampar.ac.id', 'name' => 'Rio', 'password' => Hash::make('123456'), 'created_at' => now(), 'updated_at' => now(),],
            ['email' => 'nur2018.tps@poltek-kampar.ac.id', 'name' => 'Nur', 'password' => Hash::make('123456'), 'created_at' => now(), 'updated_at' => now(),],
            
            ];

        User::insert($users);
    }
}
