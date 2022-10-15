<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeacherUser>
 */
use Illuminate\Support\Str;

class TeacherUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        if (fake()->numberBetween($min = 1, $max = 2) == 1) {
            $gender = "male";
        } else {
            $gender = "female";
        }
        return [
            "name" => fake()->name(),
            "lastname" => fake()->lastName(),
            "address" => fake()->address(),
            "email" => fake()->email(),
            "phone" => fake()->phoneNumber(),
            "specialty" => fake()->name(),
            "birthday" => fake()->date(),
            "gender" => $gender,
            "id_identifier" => Str::random(10),
        ];
    }
}
