<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Town;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(),
            'description' => $this->faker->paragraph,
            'level' => $this->faker->numberBetween(1, 10),
            'town_id' => Town::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
