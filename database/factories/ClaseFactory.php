<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clase>
 */
class ClaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'descripcion' => fake()->sentence(),
            'fecha_hora_inicio' => fake()->dateTimeBetween('now', '+1 month'),
            'cantidad_maxima_alumnos' => fake()->numberBetween(5, 30),
            'user_id' => fake()->numberBetween(1, 10), // ID del profesor, puede ser asignado posteriormente
        ];
    }
}
