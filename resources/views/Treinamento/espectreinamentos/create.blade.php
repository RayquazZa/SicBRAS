@extends('adminlte::page')

@section('title', 'Módulo de Treinamento')

@section('content_header')
    <h1>Gerenciador de Tipos de Treinamento do Sistema</h1>
@stop

@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Adicionar nova Especificação de Treinamento ao Sistema </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('espectreinamentos.index') }}">Voltar</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>OPS!</strong> Houve um erro na entrada de dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('espectreinamentos.store') }}" method="POST">
        @csrf


         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome da Nova Especificação de Treinamento:</strong>
                    <input type="text" name="nome_tptreinamento" class="form-control" placeholder="Digite o nome...">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>


    </form>


@endsection