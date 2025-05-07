<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ElectionType>
 */
class ElectionTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_name' => $this->faker->randomElement(['national'])
        ];
    }

    public function type(string $type): static
    {
        return $this->state(fn (array $attributes) => [
            'type_name' => $type
        ]);
    }
}
