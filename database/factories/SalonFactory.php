<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salon>
 */
class SalonFactory extends Factory
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
            "code" =>  Str::random(10),
            "name" => fake()->name(),
            "capacity" => fake()->randomNumber(),
            "status" => $status,
        ];
    }
}
