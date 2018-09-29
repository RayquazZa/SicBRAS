<?php

namespace App\Models\Treinamento;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    
 protected $fillable = ['nome_curso'];


    protected $table = 'cursos';


   		 use SoftDeletes;

    		protected $dates = ['deleted_at'];


   }
