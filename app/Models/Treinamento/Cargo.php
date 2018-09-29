<?php

namespace App\Models\Treinamento;

use App\Models\Treinamento\Cargo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cargo extends Model
{
    protected $fillable = [
    	'nome_cargo',
    	

    ];
    protected $table = 'cargos';


    use SoftDeletes;

    protected $dates = ['deleted_at'];


}
