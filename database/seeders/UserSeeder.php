<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        User::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", //password
            'email_verified_at' => now(),
            "id_identifier" => Str::random(10)
        ])->assignRole("admin");

        User::create([
            "name" => "student",
            "email" => "student@gmail.com",
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", //password
            'email_verified_at' => now(),
            "id_identifier" => Str::random(10)
        ])->assignRole("student");



        for ($i = 3; $i < 99; $i++) {
            if ($faker->numberBetween($min = 1, $max = 2) == 1) {
                $role = "admin";
            } else {
                $role = "student";
            }
            User::create([
                "name" => $faker->name(),
                "email" => $faker->email(),
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", //password
                'email_verified_at' => now(),
                "id_identifier" => Str::random(10)
            ])->assignRole($role);
        }
    }
}
