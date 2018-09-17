@extends('adminlte::page')

@section('title', 'Módulo de Treinamento')

@section('content_header')
    <center>
    <br>
    <h3 style="margin-top: -30px;">Gerenciador de Cargos</h3>
    </center>
@stop


@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=" .bd-example-modal-lg">Incluir Cargo</button>

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                
                <form action="{{ route('cargos.store') }}" method="POST">
                    @csrf
                    <div class="container box box-success">        
                        <br>
                    <div class="row">
                            <div class="col-md-4">
                                <strong>Nome do Novo Cargo:</strong>
                                <input type="text" name="nome_cargo" class="form-control" placeholder="Digite o nome..." required="ON">
                            </div>
                            <div class="col-md-4">
                                <strong> </strong>
                                <center><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button></center>
                            </div>
                            <div class="col-md-4">
                                <strong> </strong>
                                <button type="submit" class="btn btn-sic btn-success btn-block btn-flat ">Enviar</button>
                            </div>
                        </div>
                        <br>
                    </div>
                </form>
                </div>
                    </div>
                </div>  
            </div>
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
            <th width="150px"><center>Ação</center></th>
        </tr>
        </thead>
        @foreach ($cargos as $cargo)
        <tr>
            <td><center>{{ $cargo->id }}</center></td>
            <td><center>{{ $cargo->nome_cargo }}</center></td>
            <td>
                <center>
                <form action="{{ route('cargos.destroy',$cargo->id) }}" method="POST">

                    <!-- OPÇÃO DE VER ITEM 
                    <a class="btn btn-info" href="{{ route('cargos.show',$cargo->id) }}">Ver</a>
                    -->

                    <a class="btn btn-primary" href="{{ route('cargos.edit',$cargo->id) }}">Editar</a>


                    @csrf
                    @method('DELETE')

   
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </center>
            </td>
        </tr>
        @endforeach
    </table>


    {!! $cargos->links() !!}


@endsection