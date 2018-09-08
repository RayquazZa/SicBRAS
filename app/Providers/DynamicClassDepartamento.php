<?php
namespace App\Providers;
use App\Models\Treinamento\Departamento; 
use Illuminate\Support\ServiceProvider;
class DynamicClassDepartamento extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('classdepartamento_array', Departamento::all()); // array para armazenar os dados da tabela
        });

    }
   
}

 