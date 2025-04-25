<?php

namespace Database\Factories;

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
            'pos_name' => $this->faker->randomElement(['senator', 'mayor', 'vice mayor', 'congressman', 'councilor', 'representative', 'barangay captain', 'barangay kagawad', 'SK chairperson', 'SK kagawad']),
            'election_type_id' => $this->faker->numberBetween(1, 5),
        ];
    }

    public function positions(string $positions, int $type_id): static
    {
        return $this->state(fn (array $attributes) => [
            'pos_name' => $positions,
            'election_type_id' => $type_id
        ]);
    }
}
