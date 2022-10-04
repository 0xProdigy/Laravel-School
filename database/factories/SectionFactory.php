<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
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
            "name" =>  Str::random(10),
            "status" =>  $status,
            "year" =>  fake()->year(),
            "id_identifier" =>  fake()->name(),
        ];
    }
}
