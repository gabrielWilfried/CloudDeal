<?php

namespace Database\Factories;

//use App\Models\User;
use App\Models\Annonce;

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
            'annonce_id' => Annonce::inRandomOrder()->first()->id,
            'is_agree_seller' => null,
            'is_agree_customer' => null,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}
