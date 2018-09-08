<?php

namespace App\Models\Treinamento;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    protected $fillable = [
    	'nome_funcionario', 'email_funcionario', 'instrutor', 
    	'cargos_id', 'nome_cargo',
    	'cetors_id', 'nome_cetor',
    	'departamentos_id', 'nome_departamento',
    ];     

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
