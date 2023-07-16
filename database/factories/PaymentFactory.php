<?php

namespace Database\Factories;

use App\Models\Annonce;
use App\Models\Boost;
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
            'amount' => $this->faker->randomFloat(),
            'target_id' => 1,
            'target_type' => Boost::class,
            'status' => PaymentStatusEnum::PENDING,
            'created_at' => now(),
            'updated_at' => now(),
            //
        ];
    }
}
