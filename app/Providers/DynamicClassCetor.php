<?php
namespace App\Providers;
use App\Models\Treinamento\Cetor; 
use Illuminate\Support\ServiceProvider;
class DynamicClassCetor extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('classcetor_array', Cetor::all()); // array para armazenar os dados da tabela
        });

    }
   
}

 