<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informações_resultado extends Model
{
        private $table = 'resultado_peneiras';

        protected $primaryKey = "id";

        public $incrementing = true;

        protected $fillable = [
          'vl_maximo';
          'vl_minimo';
        ];



}
public function user()
{
    return $this->belongsTo(User::class);
}
