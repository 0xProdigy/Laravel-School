<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentUser>
 */
use Illuminate\Support\Str;

class StudentUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        if (fake()->numberBetween($min = 1, $max = 2) == 1) {
            $role = "male";
            
        } else {
            $role = "female";
        }
        return [
            "name" => fake()->name(),
            "lastname" => fake()->lastName(),
            "address" => fake()->address(),
            "email" => fake()->email(),
            "phone" => fake()->phoneNumber(),
            "birthday" => fake()->date(),
            "gender" => $role,
            "trayecto" => Section::all()->random()->name,
            "dnirepresentative" => fake()->uuid(),
            "representativerelation" => "asdasdasdasdasdasdas",
            "id_identifier" => Str::random(10),
        ];
    }
}
