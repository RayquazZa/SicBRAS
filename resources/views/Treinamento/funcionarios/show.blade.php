@extends('adminlte::page')

@section('title', 'Módulo de Treinamento')

@section('content_header')
    <h1>Gerenciador de Funcionários do Sistema</h1>
@stop

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Visualizar Detalhes do Funcionario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('funcionarios.index') }}">Voltar</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $funcionario->nome_funcionario }}
            </div>
        </div>
    </div>
@endsection