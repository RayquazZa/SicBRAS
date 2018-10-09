<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato_Cliente extends Model
{
        private $table = 'Contato_Cliente';

        protected $primaryKey = "id";

        public $incrementing = true;

        protected $fillable = [
          'nr_telefone';
          'email_cliente';
        ];

}

public function user()
{
    return $this->belongsTo(User::class);
}
