<?php

namespace Database\Factories;

use App\Models\Section;
use App\Models\TeacherUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        if (fake()->numberBetween($min = 1, $max = 2) == 1) {
            $status = "on";
        } else {
            $status = "off";
        }
        return [
            "trayecto" => Section::all()->random()->id,
            "id_identifier" => Str::random(10),
            "name" => fake()->name(),
            "status" => $status,
            "startDate" => fake()->date(),
            "endDate" => fake()->date(),
            // "id_identifier_assignment" => AssignmentExam::all()->random()->id,
            "id_identifier_teacher" => TeacherUser::all()->random()->id,
        ];
    }
}
