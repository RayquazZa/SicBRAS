<?php

namespace App\Models\Treinamento;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Departamento extends Model
{
    protected $fillable = [
    	'nome_departamento'
    ];
    protected $table = 'departamentos';

    use SoftDeletes;

    protected $dates = ['deleted_at'];


}
