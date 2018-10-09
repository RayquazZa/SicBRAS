<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class analise_quimica extends Model
{
      private $table = 'analise_quimica';

      protected $primaryKey = "id";

      public $incrementing = true;

     protected $fillable = [
       'nr_analise';
       'nr_embalagem';
       'nr_referencia';
];

}

public function user()
{
    return $this->belongsTo(User::class);
}
