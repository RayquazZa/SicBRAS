<?php

namespace App\models\estoque;

use Illuminate\Database\Eloquent\Model;

class mat_prima_saida extends Model
{
    protected $primaryKey = "IdMatPrimaSaida";

    public $incrementing = true;
    
    protected $fillable = [
        'nomeMatPrima', 
        'data',
        'lider',
        'destino',
        'saida',
        'saidaAcumulada',
        'umidade',
        'quantReal',
        'quantBags',
        'forno', 
        'operacao', 
        'fornecedor'
        
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
