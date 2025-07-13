<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Membresia;
use App\Models\Clase;
use Illuminate\Database\Seeder;
use App\Enums\RolEnum;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //Metodo para crear un usuario de prueba
        User::factory()->create([
            'name' => 'Juan',
            'lastname' => 'Saracco',
            'email' => 'test@example.com',
            'password' => '12345678', // password
            'rol' => RolEnum::ADMIN, // Rol del usuario (admin)
            'fecha_nacimiento' => '2000-01-01',
            'celular' => '1234567890',
            'peso' => 70,
            'altura' => 175,
        ]);

        User::factory()->create([
            'name' => 'Mariano',
            'lastname' => 'Giardina',
            'email' => 'marianogiardinamonti1@gmail.com',
            'password' => '12345678', // password
            'rol' => RolEnum::ADMIN, // Rol del usuario (admin)
            'fecha_nacimiento' => '2000-01-01',
            'celular' => '1234567890',
            'peso' => 70,
            'altura' => 175,
        ]);

        Membresia::create([
            'tipo' => 'mensual',
            'precio' => 35000.00,
            'duracion_meses' => 1,
        ]);

        Membresia::create([
            'tipo' => 'semestral',
            'precio' => 180000.00,
            'duracion_meses' => 6,
        ]);

        Membresia::create([
            'tipo' => 'anual',
            'precio' => 300000.00,
            'duracion_meses' => 12,
        ]);

        User::factory(33)->create();

        // Membresia::factory(33)->create();

        Clase::factory(10)->create();

    }
}
