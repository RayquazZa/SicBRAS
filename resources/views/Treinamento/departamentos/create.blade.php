@extends('adminlte::page')
 
@section('title', 'Módulo de Treinamento')
 
@section('content_header')
   <center>
    <br>
    <h3 style="margin-top: -40px;">Cadastro de Departamento</h3>
   </center>
   <br><br>
@stop
 
@section('content')

    <form action="{{ route('departamentos.store') }}" method="POST">
        @csrf
    <div class="container box box-success">
        <br>
        <div class="row">
            <div class="col-md-4">
                <strong>Nome do Novo Departamento:</strong>
                    <input type="text" name="nome_departamento" class="form-control" placeholder="Digite o nome..." required="ON">
            </div>
        
            <div class="col-md-4">
                <br>
            <center>
            <a class="btn btn-danger btn-flat" href="{{ route('departamentos.index') }}">Cancelar</a>
            </center>
            </div>

            <div class="col-md-4">
                <br>
                <button type="submit" class="btn btn-sic btn-success btn-block btn-flat ">Enviar</button>
            </div>
        </div>
        <br>
    </div>
    </form>

   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>OPS!</strong> Houve um erro na entrada de dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> Preencha os campos do formulário. </li>
                @endforeach
            </ul>
        </div>
    @endif



@endsection


