<?php

namespace App\models\estoque;

use Illuminate\Database\Eloquent\Model;

class fonecedor extends Model
{
    //private $table = 'Fonecedor';

    protected $primaryKey = "idFornecedor";

    public $incrementing = true;
    
    protected $fillable = [
        'nomeFantasia',
        'numeroTelefone',
        'email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
