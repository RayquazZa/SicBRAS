@extends('adminlte::page')

@section('title', 'Módulo de Treinamento')

@section('content_header')
    <h1>Gerenciador de Setores do Sistema</h1>
@stop

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Visualizar Detalhes do Setor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cetors.index') }}">Voltar</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $cetor->nome_cetor }}
            </div>
        </div>
    </div>
@endsection