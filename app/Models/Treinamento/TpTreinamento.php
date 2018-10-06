<?php

namespace App\Models\Treinamento;

use App\Models\Treinamento\TpTreinamento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TpTreinamento extends Model
{
    protected $fillable = [
    	'nome_tptreinamento',
    	

    ];
    protected $table = 'tptreinamentos';


    use SoftDeletes;

    protected $dates = ['deleted_at'];


}
