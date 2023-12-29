<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    use HasFactory;

    protected $table = 'aluguel';

    protected $fillable = [
        'id_carro',
        'id_cliente',
        'data_inicio',
        'data_fim',
        'valor_total',
    ];


    /*
     * Funcoes para definir as relações nos models.
     * ou seja o aluguel e relacionado com o Cliente e tambem com o Carro...Entao precisa usar o
     * belongsTo para fazer esse relacionamento.
     */

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function carro() {
        return $this->belongsTo(Carro::class, 'id_carro');
    }

}
