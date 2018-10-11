<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resultado_fisica extends Model
{
        private $table = 'resultado_fisica';

        protected $primaryKey = "id";

        public $incrementing = true;

        protected $fillable = [
          'date';
          'nr_Bag_referencia';
          'quantidade';
          'densidade';
          'resultado_pesado';
          'resultado_encontrado';
          'gramas';
          'alimentação';
          'ordem_producao';
          'equipamento';
          'telas';
          'status';
        ];
}

public function user()
{
    return $this->belongsTo(User::class);
}
