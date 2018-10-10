<?php

namespace App\models\estoque;

use Illuminate\Database\Eloquent\Model;

class nf_insumos extends Model
{
    private $table = 'NfInsumos';

    
    protected $primaryKey = "id";

    public $incrementing = true;
    
    protected $fillable = [
        'valorAcordoReal',
        'cambio',
        'valorAcordoDolar',
        'valorNota',
        'valorProdComImpost',
        'icms',
        'pisCofins',
        'ipi',
        'encargoMes',
        'valorProdSemImpostoReal',
        'ValorProdSemImpostDolar',
        'valorFrete',
        'valorprodnf',
        'valorprodfrete'

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
