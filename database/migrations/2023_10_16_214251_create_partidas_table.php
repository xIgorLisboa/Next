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
        Schema::create('partidas', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->time('horario_inicio');
            $table->time('horario_termino');
            $table->unsignedBigInteger('time_casa');
            $table->unsignedBigInteger('time_visitante');
            $table->integer('gols_time_casa');
            $table->integer('gols_time_visitante');
            $table->timestamps();

            $table->foreign('time_casa')->references('id')->on('times');
            $table->foreign('time_visitante')->references('id')->on('times');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidas');
    }
};
