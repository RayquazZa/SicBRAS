<?php

<<<<<<< HEAD
namespace App\Models\Qualidade;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contato_Cliente extends Model
{
    protected $fillable = [
        'nm_telefone','email',
    ];
    
    protected $table = 'contato_clientes';

    use SoftDeletes;

    protected $dates = ['deleted_at'];
=======
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
>>>>>>> 3d48c609cdc1b6c2061f4d9c8ec78408f077fadb
}
