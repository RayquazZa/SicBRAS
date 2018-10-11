<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resultados_quimicos extends Model
{
       private $table = 'resultados_quimicos';

       protected $primaryKey = "id";

       public $incrementing = true;

       protected $fillable = [
         'PPC';
         'H2C';
         'aglomeração';
         'densidade';
         'media_mes';
         'vl_calsio_oxig';
         'vl_maginesio_oxig';
         'vl_D/S';
         'vl_cinzas';
         'vl_volatil';
         'vl_KF';
         'vl_KF_medio';
         'c_fixo';
         'c_livre';
         'c_reagido';
         'vl_carbeto_silicio';
         'vl_carbeto_silicio_Hourizado';
         'vl_silicio_oxigenado';
         'vl_si-livre';
         'vl_silicio';
         'vl_si-reagido';
         'vl_si+so2';
         'vl_Al2C3';
         'vl_aluminio';
         'ph_torre_pequena';
         'ph_torre_grande';
         'ph_aqua';
         'vl_fe2o3';
       ];
}

public function user()
{
    return $this->belongsTo(User::class);
}
