<?php

namespace Database\Factories;

use App\Models\ElectionType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pos_code' => $this->faker->randomElement(['president', 'vice_president', 'senator']),
            'pos_name' => $this->faker->name(),
            'election_type_id' => ElectionType::inRandomOrder()->first()->id ?? 1,
        ];
    }

    public function positions(string $positions, string $position_code): static
    {
        return $this->state(fn (array $attributes) => [
            'pos_code' => $position_code,
            'pos_name' => $positions,
            'election_type_id' => ElectionType::inRandomOrder()->first()->id ?? 1,
        ]);
    }
}
