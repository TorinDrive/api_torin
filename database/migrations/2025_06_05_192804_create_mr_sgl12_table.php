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
        Schema::create('mr_sgl12', function (Blueprint $table) {
            $table->id(); 
            $table->string('codigo'); 
            $table->double('capacidade_kg'); 
            $table->double('velocidade_ms');
            $table->double('potencia_kw'); 
            $table->integer('polos'); 
            $table->string('reducao')->nullable(); 
            $table->string('tensao_alimentacao_vca'); 
            $table->string('corrente_a', 10)->nullable(); 
            $table->integer('rotacao_motor_rpm'); 
            $table->double('diametro'); 
            $table->string('cabo_numero'); 
            $table->double('diametro_externo'); 
            $table->string('passo')->nullable(); 
            $table->string('foto_nome')->nullable(); 
            $table->string('foto_caminho')->nullable(); 
            $table->string('desenho_tecnico_nome')->nullable(); 
            $table->string('desenho_tecnico_caminho')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mr_sgl12');
    }
};
