<?php

namespace App\models\estoque;

use Illuminate\Database\Eloquent\Model;

class mat_prima extends Model
{
    protected $primaryKey = "idMatPrima";

    public $incrementing = true;
    
    protected $fillable = [
       'nomeMatPrima'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
