<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

//Fabrica de Membresia
class MembresiaFactory extends Factory
{

    public function definition(): array
    {
        return [
            //'inicio' => fake()->dateTimeBetween('-1 year', 'now'),
            //'fin' => fake()->dateTimeBetween('now', '+1 year'),
            'precio' => fake()->randomElement([35000, 180000, 300000]),
            'tipo' => fake()->randomElement(['mensual', 'semestral', 'anual']),
            'activa' => fake()->boolean(),
            'duracion_meses' => fake()->randomElement([1, 6, 12]),
        ];
    }
}
