<?php

namespace Database\Factories;

use App\Models\Annonce;
use App\Models\Enums\PaymentStatusEnum;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'annonce_id' => Annonce::inRandomOrder()->first()->id,
            'amount' => $this->faker->randomFloat(),
            'status' => PaymentStatusEnum::PENDING,
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}

