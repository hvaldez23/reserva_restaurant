<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('cliente_id')
                  ->constrained('clientes')
                  ->onDelete('cascade');

            $table->foreignId('mesa_id')
                  ->constrained('mesas')
                  ->onDelete('cascade');

            $table->dateTime('fecha_reserva');
            $table->integer('num_personas');
            $table->enum('estado', ['pendiente', 'confirmada', 'cancelada'])
                  ->default('pendiente');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
