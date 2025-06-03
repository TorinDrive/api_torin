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
        Schema::create('mr_sgd26', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->float('capacidade_kg');
            $table->float('velocidade_ms');
            $table->float('potencia_kw');
            $table->integer('polos');
            $table->string('reducao')->nullable();
            $table->string('tensao_alimentacao_vca');
            $table->string('corrente_a');
            $table->integer('rotacao_motor_rpm');
            $table->float('diametro');
            $table->string('cabo_numero');
            $table->float('diametro_externo'); // Ø
            $table->float('passo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mr_sgd26');
    }
};
