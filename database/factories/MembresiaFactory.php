<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

//Fabrica de Membresia
class MembresiaFactory extends Factory
{

    public function definition(): array
    {
        return [
            'inicio' => fake()->dateTimeBetween('-1 year', 'now'),
            'fin' => fake()->dateTimeBetween('now', '+1 year'),
            'precio' => fake()->randomFloat(2, 10, 100),
            'tipo' => fake()->randomElement(['mensual', 'anual']),
            'activa' => fake()->boolean(),
        ];
    }
}
