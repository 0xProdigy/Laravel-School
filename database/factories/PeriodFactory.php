<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Period>
 */
class PeriodFactory extends Factory
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
            "name" => fake()->name(),
            "status" => $status,
            "startDate" => fake()->dateTimeThisDecade(),
            "endDate" => fake()->dateTimeThisDecade(),
            "year" => fake()->year(),
        ];
    }
}
