<?php

namespace Database\Factories;

use App\Models\Enums\SexeEnum;

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
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), 
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'sex' => SexeEnum::random(),
            'is_admin' => false,
            'location' => null,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
