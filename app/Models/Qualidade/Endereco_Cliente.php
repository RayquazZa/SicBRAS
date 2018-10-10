<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco_Cliente extends Model
{
       private $table = 'Endereco_Cliente';

       protected $primaryKey = "id";

       public $incrementing = true;

       protected $fillable = [
         'nm_cidade';
         'nm_estado';
         'nr_cep';
         'nm_bairro';
         'complemento';
         'uf';
         'rua';
      ];


}
public function user()
{
    return $this->belongsTo(User::class);
}
