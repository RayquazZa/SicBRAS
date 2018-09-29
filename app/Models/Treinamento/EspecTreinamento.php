<?php

namespace App\Models\Treinamento;

use App\Models\Treinamento\EspecTreinamento;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EspecTreinamento extends Model
{
    protected $fillable = [
    	'nome_espectreinamento',
    	

    ];
    protected $table = 'espectreinamentos';


    use SoftDeletes;

    protected $dates = ['deleted_at'];


}
