<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdminUser>
 */
class AdminUserFactory extends Factory
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
            "lastname" => fake()->lastName(),
            "address" => fake()->address(),
            'email' => fake()->unique()->safeEmail(),
            "phone" => fake()->phoneNumber(),
            "id_identifier" => Str::random(10),
        ];
    }
}
