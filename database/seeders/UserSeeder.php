<?php

namespace Database\Seeders;

use App\Models\AssignmentExam;
use App\Models\Section;
use App\Models\StudentUser;
use App\Models\Subject;
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
        $user = StudentUser::factory()->create([
            "name" => "student",
            "email" => "student@gmail.com",
            "trayecto" => Section::all()->random()->name,
        ]);
        User::factory()->create([
            "name" => $user->name,
            "email" => $user->email,
            "id_identifier" => $user->id_identifier,
        ])->assignRole("student");
    }
}
