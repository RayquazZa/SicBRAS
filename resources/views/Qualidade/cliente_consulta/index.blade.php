@extends('adminlte::page')

@section('title', 'Módulo de Treinamento')

@section('content_header')
    <center>
    <br>
    <h3 style="margin-top: -30px;">Lista de Clientes</h3>
    </center>
@stop

@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
        </div>
    </div>

    <head>
    
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

        <script type="text/javascript" class="init">

            $(document).ready(function() {
            $('#tobarril').DataTable({
                    "language": {
                    "lengthMenu": "Visualizando _MENU_  itens por página",
                    "zeroRecords": "Item não encontrado",
                    "info": "Visualizando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(Filtrado from _MAX_ total records)"
                        }
                    } 
                );
            } );
        </script>

    </head>
            
    <br>
    <div class="container box box-success">
    </div>
    <br>
    <table id="tobarril" class="table table-bordered" border="1" bgcolor="#ffffff">
    
    <thead>
    <tr>
        <th><center>N°</center></th>
        <th><center>Nome</center></th>
        <th><center>CPF</center></th>
        <th><center>CNPJ</center></th>
        <th width="150px"><center>Ação</center></th>
    </tr>
    </thead>
    @foreach ($clientes as $cliente)
    <tr>
        <td><center>{{ $cliente->id }}</center></td>
        <td><center>{{ $cliente->nome }}</center></td>
        <th><center>{{ $cliente->cpf }}</center></th>
        <th><center>{{ $cliente->cnpj }}</center></th>
        <td>
            <center>
            <form action="{{ route('cliente_consulta.destroy',$cliente->idClientes) }}" method="POST">

                <!-- OPÇÃO DE VER ITEM 
                <a class="btn btn-info" href="{{ route('cliente_consulta.show',$cliente->idClientes) }}">Ver</a>
                -->

                <a class="btn btn-primary" href="{{ route('cliente_consulta.edit',$cliente->idClientes) }}">Editar</a>


                @csrf
                @method('DELETE')


                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </center>
        </td>
    </tr>
    @endforeach
    </table>


   {!! $clientes->links() !!}


@endsection