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

            $table->date('inicio');

            $table->date('fin');

            $table->decimal('precio', 8, 2);

            $table->enum('tipo',['mensual', 'semestral', 'anual']); // 'mensual', 'semestral', 'anual'

            $table->boolean('activa')->default(false); // estado

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
