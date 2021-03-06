<?php

namespace App\Models\Qualidade;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    protected $fillable = [
            'nome','cpf','cnpj',
    ];

    protected $table = 'clientes';

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
