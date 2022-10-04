<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Subject;

use App\Models\StudentUser;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 60; $i++) {

            $section = Section::factory()->create();

            Subject::factory(4)->create([
                "trayecto" => $section->name
            ]);
            $this->create_users($section);
        }

        $this->Admin_Stundent();
    }

    public function create_users($section)
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 4; $i++) {
            $student = StudentUser::factory()->create([
                "section" => $section->name
            ]);

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
                "id_identifier" => $student->id_identifier
            ])->assignRole($role);
        } 
    }

    public function Admin_Stundent(){
        $faker = \Faker\Factory::create();
        $admin_identifier = Str::random(10);
        User::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", //password
            'email_verified_at' => now(),
            "id_identifier" => $admin_identifier
        ])->assignRole("admin");

        $student = StudentUser::factory()->create();

        User::create([
            "name" => "student",
            "email" => "student@gmail.com",
            "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi", //password
            'email_verified_at' => now(),
            "id_identifier" => $student->id_identifier
        ])->assignRole("student");
    }
}
