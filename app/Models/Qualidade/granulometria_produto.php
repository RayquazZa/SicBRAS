<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class granulometria_produto extends Model
{
        private $table = 'granulometria_produto';

        protected $primaryKey = "id";

        public $incrementing = true;

        protected $fillable = [
          'tamanho_maximo';
          'tamanho_minimo';
          'pureza_produto';
          'fracao(ASTM)';
          'ASTM(mm)';
];

}
public function user()
{
    return $this->belongsTo(User::class);
}
