<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignRoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::get();
        $usersRoles = [];
        
        foreach ($users as $key => $item) {
            $usersRoles[] = [
                'role_id' => 2,
                "model_type" => User::class,
                'model_id' => $item->id 
            ];
        }
        DB::table("model_has_roles")->insert($usersRoles);
    }
}
