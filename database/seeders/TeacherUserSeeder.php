<?php

namespace Database\Seeders;
use App\Models\Section;
use App\Models\User;

use App\Models\TeacherUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = TeacherUser::factory()->create([
            "name" => "teacher",
            "email" => "teacher@gmail.com",
        ]);
        User::factory()->create([
            "name" => $user->name,
            "email" => $user->email,
            "id_identifier" => $user->id_identifier,
        ])->assignRole("teacher");
        TeacherUser::factory(70)->create();
    }
}
