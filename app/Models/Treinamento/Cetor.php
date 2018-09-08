<?php

namespace App\Models\Treinamento;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cetor extends Model
{
     protected $fillable = [
    	'nome_cetor'
    ];
    protected $table = 'cetors';


    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
