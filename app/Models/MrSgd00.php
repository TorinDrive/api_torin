<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MrSgd00 extends Model
{
    protected $table = 'mr_sgd00';

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
    ];

    /**
     * Accessor para obter a URL pública da foto principal.
     * Chamado como $item->url_da_foto
     */
    public function getUrlDaFotoAttribute()
    {
        // 'foto_caminho' é a coluna no banco que armazena o caminho relativo da foto.
        // Ex: 'fotos_mr_sgd00/minha_foto.jpg'
        if ($this->foto_caminho && Storage::disk('public')->exists($this->foto_caminho)) {
            return Storage::disk('public')->url($this->foto_caminho);
        }
        
        return null; // Retorna null se não houver caminho ou o arquivo não existir
    }

    /**
     * Accessor para obter a URL pública do desenho técnico.
     * Chamado como $item->url_do_desenho_tecnico
     */
    public function getUrlDoDesenhoTecnicoAttribute()
    {
        // 'desenho_tecnico_caminho' é a coluna no banco que armazena o caminho relativo do desenho.
        // Ex: 'desenhos_mr_sgd00/meu_desenho.pdf' ou 'desenhos_mr_sgd00/meu_desenho.jpg'
        if ($this->desenho_tecnico_caminho && Storage::disk('public')->exists($this->desenho_tecnico_caminho)) {
            return Storage::disk('public')->url($this->desenho_tecnico_caminho);
        }
        
        return null; // Retorna null se não houver caminho ou o arquivo não existir
    }

    // Inclui os accessors nas representações de array e JSON do modelo.
    protected $appends = [
        'url_da_foto', 
        'url_do_desenho_tecnico'
    ];
}
