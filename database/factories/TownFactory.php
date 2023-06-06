<?php

namespace Database\Factories;

use App\Models\Region;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Town>
 */
class TownFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->city,
            'region_id' => Region::inRandomOrder()->first()->id,
            'description' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}
