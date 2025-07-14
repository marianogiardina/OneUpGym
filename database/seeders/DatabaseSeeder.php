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

        User::factory(10)->create();

        //Membresia::factory(33)->create();

        Clase::create([
            'nombre' => 'Yoga',
            'descripcion' => 'Clase de yoga para relajación',
            'dia' => 'lunes',
            'hora' => '18:00:00',
            'cantidad_maxima_alumnos' => 20,
            'user_id' => 1
        ]);

        //Clase::factory(10)->create();
    }
}
