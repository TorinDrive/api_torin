<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MrSgd00 extends Model
{
    protected $table = 'mr_sgd00';

    protected $fillable = [
        'codigo', 'capacidade_kg', 'velocidade_ms', 'potencia_kw', 'polos', 'reducao',
        'tensao_alimentacao_vca', 'corrente_a', 'rotacao_motor_rpm', 'diametro',
        'cabo_numero', 'diametro_externo', 'passo'
    ];

}
    