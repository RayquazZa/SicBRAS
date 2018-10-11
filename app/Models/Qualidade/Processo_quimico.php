<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo_quimico extends Model
{
  private $table = 'analise_quimica';

  protected $primaryKey = "id";

  public $incrementing = true;

 protected $fillable = [

   'operacao';
   'observacao';
   'status';
   'lote';
   'moinho';
   'filtro';
   'tp_amostragem';

];

}

public function user()
{
    return $this->belongsTo(User::class);
}
