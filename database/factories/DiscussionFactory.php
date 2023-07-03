<?php

namespace Database\Factories;

//use App\Models\User;
use App\Models\Annonce;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discussion>
 */
class DiscussionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->unique()->word,
            'is_open' => $this->faker->boolean,
            'annonce_id' => 1,
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }
}
