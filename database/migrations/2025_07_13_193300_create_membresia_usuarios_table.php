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
        Schema::create('membresia_usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('membresia_id')->constrained()->onDelete('cascade');
            $table->date('fecha_inicio'); // Fecha de inicio de la membresía
            $table->date('fecha_fin'); // Fecha de fin de la membresía
            $table->boolean('activo')->default(true); // Indica si la membresía está
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membresia_usuarios');
    }
};
