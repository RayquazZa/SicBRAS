<?php
namespace App\Providers;
use App\Models\Treinamento\Cargo; 
use App\Models\Treinamento\Cetor; 
use App\Models\Treinamento\Departamento; 
use Illuminate\Support\ServiceProvider;
class DynamicClassName extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('classcargo_array', Cargo::all()); // array para armazenar os dados da tabela
        });


    }
   
}

 