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
                <h2>Editar Nome do Setor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cetors.index') }}">Voltar</a>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>OPA!</strong>Houve um Problema na entrada de Dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('cetors.update',$cetor->id) }}" method="POST">
        @csrf
        @method('PUT')


         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="nome_cetor" value="{{ $cetor->nome_cetor }}" class="form-control" placeholder="Digite aqui o novo nome">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </div>


    </form>


@endsection