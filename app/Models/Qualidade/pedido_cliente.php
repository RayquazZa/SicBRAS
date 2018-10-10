<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido_cliente extends Model
{
      private $table = 'pedido_cliente';

      protected $primaryKey = "id";

      public $incrementing = true;

      protected $fillable = [
        'revisao_pedido';
        'data_pedido';
        'cd_pedido';
        'mp';
        'requisito_iso';
        'setor';
      ];
}

public function user()
{
    return $this->belongsTo(User::class);
}
