<?php

namespace App\Models\Qualidade;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    protected $fillable = [
        'cep','endereco','bairro','cidade','estado','numero',
    ];

    protected $table = 'enderecos';

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
