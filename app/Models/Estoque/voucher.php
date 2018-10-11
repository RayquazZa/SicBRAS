<?php

namespace App\models\estoque;

use Illuminate\Database\Eloquent\Model;

class voucher extends Model
{
    protected $primaryKey = "idVouchers";

    public $incrementing = true;
    
    protected $fillable = [
        'turnos',
        'data',
        'respAmostragem',
        'matPrima',
        'lote',
        'ano',
        'nmOperacao',
        'nmForno',
        'fornecedor',
        'origem',
        'tipoMistura',
        'amostraTeste',
        'material',
        'identAmostra'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
