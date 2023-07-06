<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Discussion;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $discussion = Discussion::find(1);
        return [
            'content' => $this->faker->paragraph,
            'discussion_id' => Discussion::inRandomOrder()->first()->id,
            'seller_id' =>  $discussion->user_id,
            'customer_id' => User::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}
