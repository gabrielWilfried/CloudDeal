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
            'price' => $this->faker->randomFloat(),
            'start_at' => $this->faker->date,
            'end_at' => $this->faker->date,
            'score' => $this->faker->numberBetween(1, 10),
            //'user_id' => User::inRandomOrder()->first()->id,
            'annonce_id' => Annonce::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
            //
        ]; 
    }
}
