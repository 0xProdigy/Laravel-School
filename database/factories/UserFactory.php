<?php

namespace Database\Factories;

use App\Models\AdminUser;
use App\Models\StudentUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // if (fake()->numberBetween($min = 1, $max = 2) == 1) {
        //     $id_identifier = AdminUser::all()->random()->id;
        // } else if (fake()->numberBetween($min = 1, $max = 2) == 1) {
        //     $id_identifier = StudentUser::all()->random()->id;
        // } else if (fake()->numberBetween($min = 1, $max = 2) == 1) {
        //     $id_identifier = StudentUser::all()->random()->id;
        // }
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'id_identifier' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
