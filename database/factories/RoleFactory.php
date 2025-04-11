<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rol_name' => $this->faker->randomElement(['admin', 'editor', 'guest']),
        ];
    }

    /**
     * State for the "admin" role.
     */
    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'rol_name' => 'admin',
        ]);
    }

    /**
     * State for the "editor" role.
     */
    public function editor(): static
    {
        return $this->state(fn (array $attributes) => [
            'rol_name' => 'editor',
        ]);
    }

    /**
     * State for the "guest" role.
     */
    public function guest(): static
    {
        return $this->state(fn (array $attributes) => [
            'rol_name' => 'viewer',
        ]);
    }
}
