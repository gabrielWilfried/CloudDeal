<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Annonce;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Boost>
 */
class BoostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => $this->faker->randomFloat(2, 10, 100),
            'period' => $this->faker->randomElement(['7 days', '14 days', '30 days']),
            'status' => 1,
            'Begin_date' => $this->faker->date(),
            'End_date' => $this->faker->date(),
            'user_id' => User::inRandomOrder()->first()->id,
            'annonce_id' => Annonce::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}
