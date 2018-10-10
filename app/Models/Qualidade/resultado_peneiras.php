<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resultado_peneiras extends Model
{
        private $table = 'resultado_peneiras';

        protected $primaryKey = "id";

        public $incrementing = true;

        protected $fillable = [
          'descrição_peneira';
          'resultado_peneiras';

        ];

}

public function user()
{
    return $this->belongsTo(User::class);
}
