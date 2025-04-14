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
            'pos_name' => $this->faker->randomElement(['senatorial', 'local', 'party list']),
        ];
    }

    public function senatorial(): static
    {
        return $this->state(fn (array $attributes) => [
            'pos_name' => 'senatorial',
        ]);
    }

    public function local(): static
    {
        return $this->state(fn (array $attributes) => [
            'pos_name' => 'local',
        ]);
    }

    public function partylist(): static
    {
        return $this->state(fn (array $attributes) => [
            'pos_name' => 'party list',
        ]);
    }
}
