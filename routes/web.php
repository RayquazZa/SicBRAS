<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Estoque'], function(){

    Route::resource('estoque', 'EstoqueController');
});

$this->group(['middleware' => ['auth'], 'namespace' => 'Treinamento'], function(){

    /* ROTAS MENU DO MÓDULO DE TREINAMENTO*/
    Route::resource('treinamento', 'TreinamentoController');
    Route::resource('help', 'HelpController');
    Route::resource('gerenciador', 'GerenciadorController');

    /* ROTAS DE GERENCIAR ITENS */
    Route::resource('cargos','CargoController');  
    Route::resource('cetors','CetorController');
    Route::resource('departamentos','DepartamentoController');
    Route::resource('funcionarios','FuncionarioController');

    /* ROTA DE CADASTRAR TURMA */


    /* ROTA DE CONSULTAR TURMAS */


    /* ROTAS DE GERENCIAMENTO DE ARQUIVOS */
    Route::resource('gerenciador','GerenciadorController');

    /* ROTAS DE RELATORIOS */

 
});

$this->group(['middleware' => ['auth'], 'namespace' => 'Qualidade'], function(){

    Route::resource('cliente_consulta', 'ConsClienteControler');
    Route::resource('cliente', 'ClienteController');
    Route::resource('qualidade', 'QualidadeController');
    Route::resource('analise', 'AnaliseGranulController');
    
});

Route::resource('home', 'HomeController');
Route::get('/', function () {
    return view('welcome');
});  
    Auth::routes();