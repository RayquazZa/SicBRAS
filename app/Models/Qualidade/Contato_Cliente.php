<?php

namespace App\Models\Qualidade;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contato_Cliente extends Model
{
    protected $fillable = [
        'nm_telefone','email',
    ];
    
    protected $table = 'contato_clientes';

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
