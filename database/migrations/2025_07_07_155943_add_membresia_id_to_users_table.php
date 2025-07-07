<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    //Creo otra migracion para agregar la columna membresia_id a la tabla users
    //Esto es necesario porque la tabla membresias se crea despues de la tabla users
    //Si agrego la columna membresia_id en la migracion de creacion de la tabla users va a dar error porque la tabla membresias no existe todavia
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('membresia_id')->nullable()->constrained('membresias')->onDelete('set null'); // Relación con la membresía
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['membresia_id']); // Eliminar la clave foránea
            $table->dropColumn('membresia_id'); // Eliminar la columna
        });
    }
};
