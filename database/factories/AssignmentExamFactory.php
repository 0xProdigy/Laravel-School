<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssignmentExam>
 */
class AssignmentExamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->name(),
            "timeStart" => now(),
            "timeEnd" => now(),
            "date" => now() ,
            "calification" => fake()->numberBetween($min = 0, $max = 20),
            "id_identifier_subject" => Subject::all()->random()->id,
        ];
    }
}
