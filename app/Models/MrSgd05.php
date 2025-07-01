<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MrSgd05 extends Model
{
    protected $table = 'mr_sgd05';

    protected $fillable = [
        'codigo', 
        'capacidade_kg', 
        'velocidade_ms', 
        'potencia_kw', 
        'polos', 
        'reducao',
        'tensao_alimentacao_vca', 
        'corrente_a', 
        'rotacao_motor_rpm', 
        'diametro',
        'cabo_numero', 
        'diametro_externo', 
        'passo', 
        'foto_nome',
        'foto_caminho',
        'desenho_tecnico_nome',
        'desenho_tecnico_caminho',
        'tracao_nominal',
        'carga_estatica',
        'alimentacao_freio',
        'peso_aproximado',
        'instalacao',
        'aplicacao',
        'resgate_manual_remoto',
    ];

    /**
     * Accessor para obter a URL pública da foto principal.
     */
    public function getUrlDaFotoAttribute()
    {
        if ($this->foto_caminho && Storage::disk('public')->exists($this->foto_caminho)) {
            return Storage::disk('public')->url($this->foto_caminho);
        }
        
        return null;
    }

    /**
     * Accessor para obter a URL pública do desenho técnico.
     */
    public function getUrlDoDesenhoTecnicoAttribute()
    {
        if ($this->desenho_tecnico_caminho && Storage::disk('public')->exists($this->desenho_tecnico_caminho)) {
            return Storage::disk('public')->url($this->desenho_tecnico_caminho);
        }
        
        return null;
    }

    // Inclui os accessors nas representações de array e JSON do modelo.
    protected $appends = [
        'url_da_foto', 
        'url_do_desenho_tecnico'
    ];
}