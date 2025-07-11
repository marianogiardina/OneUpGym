<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(), // Nombre del usuario (input text)
            'lastname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'rol'=> fake()->randomElement([0, 1]), // Rol del usuario (admin o user)
            'fecha_nacimiento' => fake()->date('Y-m-d', '2000-01-01'), // Fecha de nacimiento del usuario (input date)
            'celular' => fake()->phoneNumber(), // Número de celular del
            'peso' => fake()->numberBetween(50, 100), // Peso del usuario (input number)
            'altura' => fake()->numberBetween(150, 200), // Altura del usuario (input number)
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
