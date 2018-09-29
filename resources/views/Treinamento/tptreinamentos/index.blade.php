@extends('adminlte::page')

@section('title', 'Módulo de Treinamento')

@section('content_header')
<div id="conteudo" style="margin-top: -30px;">
    <div class="row">
        <!-- ./col -->
        <div class="col-lg-12 col-xs-6">
          <!-- small box -->
          <center>
          <div class="small-box" style="background:#007a64; color: white">
            <div class="inner">
              <center><h2>Gerenciador de Tipos de Treinamento</h2></center>              
                <h4>
                    <div align="right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="     .bd-example-modal-lg" >Incluir Tipo de Treinamento</button>
                    </div>
                </h4>
            </div>
          </div>
        </div>
      </div>
      <div class="box box-success" style="position: relative; left: 0px; top: 0px;">
</div>
@stop


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                
                <form action="{{ route('tptreinamentos.store') }}" method="POST">
                    @csrf
                    <div class="container box box-success">        
                        <br>
                    <div class="row">
                            <div class="col-md-4">
                                <strong>Nome do Novo Tipo de Treinamento:</strong>
                                <input type="text" name="nome_tptreinamento" class="form-control" placeholder="Digite o nome..." required="ON">
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
                    "infoEmpty": "Nenhum item a ser exibido",
                    "infoFiltered": "(Filtrado from _MAX_ total records)"
                        }
                    } 
                );
            } );
        </script>

    </head>

    
    <table id="tobarril" class="table table-bordered" border="1" bgcolor="#ffffff">
        <thead>
        <tr>
            <th><center>N°</center></th>
            <th><center>Nome</center></th>
            <th width="150px"><center>Ação</center></th>
        </tr>
        </thead>
        @foreach ($tptreinamentos as $tptreinamento)
        <tbody>
        <tr >
            <td><center>{{ $tptreinamento->id }}</center></td>
            <td><center>{{ $tptreinamento->nome_tptreinamento }}</center></td>
            <td>
                <center>
                <form action="{{ route('tptreinamentos.destroy',$tptreinamento->id) }}" method="POST" onsubmit="return confirm ('Tem certeza que deseja excluir o Tipo de Treinamento selecionado?')">



 
                    <a class="btn btn-primary" href="{!! route('tptreinamentos.edit', [$tptreinamento->id]) !!}">Editar</a>


                    @csrf
                    @method('DELETE')

   
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </center>
            </td>
        </tr>
         </tbody>
        @endforeach
    </table>


    {!! $tptreinamentos->links() !!}


@endsection