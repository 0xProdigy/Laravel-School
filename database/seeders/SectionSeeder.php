<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use App\Models\AssignmentExam;
use App\Models\Section;
use App\Models\Subject;

use App\Models\StudentUser;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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

            // $assignment = AssignmentExam::factory()->create();
            // Subject::factory(4)->create([
            //     "trayecto" => $section->name,
            //     "id_identifier_assignment" => $assignment->id
            // ]);

            
            Subject::factory(4)->create([
                "trayecto" => $section->id,
            ]);

            $this->create_users($section);
        }
    }

    public function create_users($section)
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 4; $i++) {
            if ($faker->numberBetween($min = 1, $max = 2) == 1) {
                $role = "admin";
                $user = AdminUser::factory()->create();
            } else {
                $role = "student";
                $user = StudentUser::factory()->create([
                    "trayecto" => $section->id,
                ]);
            }
            User::factory()->create([
                "name" => $user->name,
                "email" => $user->email,
                'email_verified_at' => now(),
                "id_identifier" => $user->id_identifier
            ])->assignRole($role);
        }
    }
}
