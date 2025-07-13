<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('membresias', function (Blueprint $table) {

            $table->id();

            $table->decimal('precio', 8, 2);

            $table->enum('tipo',['mensual', 'semestral', 'anual']); // 'mensual', 'semestral', 'anual'

            $table->integer('duracion_meses')->default(1); // Duración en meses, por defecto 1 mes

            $table->boolean('activa')->default(true); // Si la membresia esta disponible o no

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membresias');
    }
};
