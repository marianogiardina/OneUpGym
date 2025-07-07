<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre de la clase
            $table->text('descripcion'); // Descripción de la clase
            $table->dateTime('fecha_hora_inicio'); // Fecha y hora de inicio de la clase
            $table->integer('cantidad_maxima_alumnos'); // Cantidad máxima de alumnos
            $table->foreignId('profesor_id')->nullable()->constrained('users')->onDelete('set null'); // ID del profesor 
            $table->timestamps();
        });

        Schema::create('clase_usuarios', function (Blueprint $table) {
            $table->foreignId('clase_id')->constrained('clases')->onDelete('cascade'); // Relación con la clase
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade'); // Relación con el usuario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clase_usuarios');

        Schema::dropIfExists('clases');
    }
};
