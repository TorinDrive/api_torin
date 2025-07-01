<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Lista de todas as tabelas de máquinas a serem atualizadas.
     * Adicione ou remova tabelas desta lista conforme necessário.
     */
    private array $machineTables = [
        'mr_sgd00', 'mr_sgd05', 'mr_sgd10', 'mr_sgd13', 'mr_sgd26', 'mr_sgd39', 'mr_sgd125', 'mr_sgd220',
        'mr_dmg211', 'mr_dmg212', 'mr_hgl14', 'mr_hgl22', 'mr_bgl225',
        'mr_rgl018', 'mr_rgl235', 'mr_rgl303', 'mr_rgl304', 'mr_rgl305', 'mr_rgl306',
        'mr_sgl12', 'mr_sgl23s', 'mr_sgl23x', 'mr_sgl206', 'mr_sgl306', 'mr_sgl514', 'mr_sgl614', 'mr_sgl636'
    ];

    /**
     * Run the migrations.
     * Adiciona as novas colunas a todas as tabelas de máquinas.
     */
    public function up(): void
    {
        foreach ($this->machineTables as $tableName) {
            // Verifica se a tabela existe antes de tentar modificá-la
            if (Schema::hasTable($tableName)) {
                Schema::table($tableName, function (Blueprint $table) {
                    // Adiciona as novas colunas. Todas são string e podem ser nulas.
                    $table->string('tracao_nominal')->nullable()->after('passo');
                    $table->string('carga_estatica')->nullable()->after('tracao_nominal');
                    $table->string('alimentacao_freio')->nullable()->after('carga_estatica');
                    $table->string('peso_aproximado')->nullable()->after('alimentacao_freio');
                    $table->string('instalacao')->nullable()->after('peso_aproximado');
                    $table->string('aplicacao')->nullable()->after('instalacao');
                    $table->string('resgate_manual_remoto')->nullable()->after('aplicacao');
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     * Remove as colunas que foram adicionadas.
     */
    public function down(): void
    {
        foreach ($this->machineTables as $tableName) {
            if (Schema::hasTable($tableName)) {
                Schema::table($tableName, function (Blueprint $table) {
                    // Lista das colunas a serem removidas ao reverter a migration
                    $columnsToDrop = [
                        'tracao_nominal',
                        'carga_estatica',
                        'alimentacao_freio',
                        'peso_aproximado',
                        'instalacao',
                        'aplicacao',
                        'resgate_manual_remoto',
                    ];

                    // Verifica se cada coluna existe antes de tentar removê-la para evitar erros
                    foreach ($columnsToDrop as $column) {
                        if (Schema::hasColumn($tableName, $column)) {
                            $table->dropColumn($column);
                        }
                    }
                });
            }
        }
    }
};
