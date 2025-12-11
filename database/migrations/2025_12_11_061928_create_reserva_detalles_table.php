<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reserva_detalles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('reserva_id')
                ->constrained('reservas')
                ->onDelete('cascade');

            $table->text('nota')->nullable();
            $table->string('preferencias')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reserva_detalles');
    }
};
