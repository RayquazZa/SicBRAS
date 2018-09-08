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
                <h2>Editar Nome do Funcionário</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('funcionarios.index') }}">Voltar</a>
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


    <form action="{{ route('funcionarios.update',$funcionario->id) }}" method="POST">
        @csrf
        @method('PUT')


         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="nome_funcionario" value="{{ $funcionario->nome_funcionario }}" class="form-control" placeholder="Digite aqui o novo nome">
                </div>
                
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email_funcionario" value="{{ $funcionario->email_funcionario }}" class="form-control" placeholder="Digite aqui o novo nome">
                </div>
                
                <div class="form-group">
                    <strong>Ele é Instrutor:</strong>
                    <input type="text" name="instrutor" value="{{ $funcionario->instrutor }}" class="form-control" placeholder="Digite aqui o novo nome">
                </div>
                
            




            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </div>


    </form>


@endsection