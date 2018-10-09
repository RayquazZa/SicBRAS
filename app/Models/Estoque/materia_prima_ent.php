<?php

namespace App\models\estoque;

use Illuminate\Database\Eloquent\Model;

class materia_prima_ent extends Model
{
    protected $primaryKey = "idMateriaPrima";

    public $incrementing = true;
    
    protected $fillable = [
        'nomeMatPrima',
        'lote',
        'sobraAntNova',
        'sobraAntReciclada',
        'sobraMesAnterior',
        'sobraAntSintetico',
        'sobraAntRecirculado'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

