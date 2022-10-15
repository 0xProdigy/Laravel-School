<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = AdminUser::factory()->create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
        ]);
        User::factory()->create([
            "name" => $admin->name,
            "email" => $admin->email,
            "id_identifier" => $admin->id_identifier,
        ])->assignRole("admin");
    }
}
