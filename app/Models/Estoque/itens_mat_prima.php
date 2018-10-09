<?php

namespace App\models\estoque;

use Illuminate\Database\Eloquent\Model;

class itens_mat_prima extends Model
{
    //  
    protected $primaryKey = "idItensMatPrima";

    public $incrementing = true;
    
    protected $fillable = [
            'data',
            'lider',
            'notaFiscal',
            'fornecedor',
            'quantidade',
            'entradaAcumulada',
            'obeservacoes', 
            'umidade',
            'forno',
            'operacao',
            'quantReal',
            'transportadora'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
