<?php

namespace App\models\estoque;

use Illuminate\Database\Eloquent\Model;

class insumos_inf extends Model
{
    protected $primaryKey = "idProdutoInf";

    public $incrementing = true;
    
    protected $fillable = [
       'idProdutoInf',
       'nomeMatPrima',
       'dtRecebimento',
       'dtExpedicao',
       'fornecedor',
       'notaFiscal',
       'pesoNota',
       'pesoSicbras',
       'pesoDiferenca',
       'cte',
       'saldoretirar',
       'transportadora'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
