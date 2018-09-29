<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Estoque'], function(){

    Route::resource('estoque', 'EstoqueController');
});

    

$this->group(['middleware' => ['auth'], 'namespace' => 'Treinamento'], function(){

    
    Route::resource('cargos','CargoController'); 
    Route::get('cargo', 'CargoController@index')->name('cargo');
    Route::get('cargo/getdata', 'CargoController@getdata')->name('cargo.getdata');
    Route::get('cargo/contato', 'CargoController@contato')->name('cargo.contato');
    /*Route::get('cargo/edit', 'CargoController@edit')->name('cargo.edit');
    Route::get('cargo/update', 'CargoController@update')->name('cargo.update');
    Route::get('cargo/destroy', 'CargoController@destroy')->name('cargo.destroy');*/
    
  

    /* ROTAS MENU DO MÓDULO DE TREINAMENTO*/
    Route::resource('treinamento', 'TreinamentoController');
    Route::resource('help', 'HelpController');
    Route::resource('gerenciador', 'GerenciadorController');

    /* ROTAS DE GERENCIAR ITENS */
    
     
    Route::resource('cetors','CetorController');
    Route::resource('espectreinamentos','EspecTreinamentoController');
    Route::resource('tptreinamentos','TpTreinamentoController');
    Route::resource('departamentos','DepartamentoController');
    Route::resource('funcionarios','FuncionarioController');
    //Route::resource('cursos','CursoController');

    

    /* ROTA DE CADASTRAR TURMA */


    /* ROTA DE CONSULTAR TURMAS */


    /* ROTAS DE GERENCIAMENTO DE ARQUIVOS */
    Route::resource('gerenciador','FileController');
    Route::post('upload', ['as' => 'files.upload', 'uses' => 'FileController@upload']);
    Route::get('usuario/{userId}/download/{fileId}', ['as' => 'files.download', 'uses' => 'FileController@download']);
    Route::get('usuario/{userId}/remover/{fileId}', ['as' => 'files.destroy', 'uses' => 'FileController@destroy']);

    /* ROTAS DE RELATORIOS */

 
});

$this->group(['middleware' => ['auth'], 'namespace' => 'Qualidade'], function(){

    Route::resource('qualidade', 'QualidadeController');
});

Route::resource('home', 'HomeController');
Route::get('/', function () {
    return view('welcome');
});  

  

    Auth::routes();

