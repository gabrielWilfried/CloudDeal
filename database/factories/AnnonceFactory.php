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

            'name' => $this->faker->colorName,
            'image' => $this->faker->text,
            'price' => $this->faker->randomFloat(),
            'description' => $this->faker->paragraph,
            'level' => random_int(1, 500),
            'town_id' => Town::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id
        ];
    }
}
