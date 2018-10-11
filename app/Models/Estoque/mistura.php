<?php

namespace App\models\estoque;

use Illuminate\Database\Eloquent\Model;

class mistura extends Model
{
    protected $primaryKey = "idMistura";

    public $incrementing = true;
    
    protected $fillable = [
        'numeroCf',
        'numeroKf',
        'kdCoqueBase',
        'kgAreiaBase',
        'kgCoqueReal',
        'kgAreiaReal',
        'mediaCoque',
        'mediaAreia',
        'numeroBatelada',
        'turno',
        'coqueTotal',
        'areiaTotal',
        'totalMisturaDia',
        'totalBatelada',
        'misturaTotal'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
