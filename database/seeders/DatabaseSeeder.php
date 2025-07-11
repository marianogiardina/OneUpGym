<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'rol' => 0,
            'fecha_nacimiento' => '2000-01-01',
            'celular' => '1234567890',
            'peso' => 70,
            'altura' => 175,
        ]);

        User::factory(10)->create();

    }
}
