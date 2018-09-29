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
              <center><h2>Gerenciador de Funcionários</h2></center>              
                <h4>
                    <div align="right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=" .bd-example-modal-lg">Incluir Funcionário</button>
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
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                
                <form action="{{ route('funcionarios.store') }}" method="POST">
                    @csrf
                    <div class="container box box-success">
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <strong>Nome do Novo Funcionário:</strong>
                            <input type="text" name="nome_funcionario" class="form-control" placeholder="Digite o nome..." required="ON">
                    </div>
         
                    <div class="col-md-4">
                        <strong>Email do Novo Funcionário:</strong>
                            <input type="email" name="email_funcionario" class="form-control" placeholder="Digite o nome..." required="ON">
                    </div>
         
                    <div class="col-md-4">
                        <strong>Ele é instrutor?</strong>
                            <select name="instrutor" class="form-control" required="ON">
                            <option value="">Clique aqui</option>
                            <option value="Sim">Sim</option>
                            <option value="Nao">Não</option>
                            <select>   
                    </div>
                </div>

                <br>

                    <div class="row">
                        <div class="col-md-4">
                            <strong>Selecione o Cargo</strong>
                            <select name="cargos_id" class="form-control" required="ON">
                            <option value="">Clique aqui</option>
                            
                            @foreach ($classcargo_array as $cargos_id)
                                <option value="{{$cargos_id->id}}" > {{$cargos_id->nome_cargo}}</option>
                            @endforeach 
                            </select>    

                        </div>
                        
                       <div class="col-md-4">
                            <strong>Selecione o Setor</strong>
                            <select name="cetors_id" class="form-control" required="ON">
                            <option value="">Clique aqui</option>
                            @foreach ($classcetor_array as $cetors_id)
                                <option value="{{$cetors_id->id}}" > {{$cetors_id->nome_cetor}}</option>
                            @endforeach     
                            </select>   

                        </div> 
                     
                        <div class="col-md-4">
                            <strong>Selecione o Departamento</strong>
                            <select name="departamentos_id" class="form-control" required="ON">
                            <option value="">Clique aqui</option>
                            @foreach ($classdepartamento_array as $departamentos_id)
                                 <option value="{{$departamentos_id->id}}" > {{$departamentos_id->nome_departamento}}</option>
                            @endforeach               
                            </select>   
                        </div>
                    </div>  
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                    <div class="form-group">
                        <strong>Situação do Colaborador?</strong>
                            <select name="situacao" class="form-control" required="ON">
                         
                            <option value="Ativo">Ativo</option>
                            
                            <select>   
                    </div>
                    </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-4">
                        </div> 

                        <div class="col-md-4">
                        <center><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button></center>
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-sic btn-success btn-block btn-flat ">Enviar</button>
                        </div>
                    </div>
                    <br>
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

        <table id="tobarril" class="table table-bordered"> 
         
        <thead>
        <tr>
            <th><center>N°</center></th>
            <th><center>Nome</center></th>
            <th><center>Instrutor</center></th>
            <th><center>Cargo</center></th>
            <th><center>Setor</center></th>
            <th><center>Departamento</center></th>
            <th><center>Situação</center></th>
            <th width="150px"><center>Ação</center></th>
        </tr>
        </thead>
        @foreach ($funcionarios as $funcionario)
        <tbody>
        <tr>
            <td><center>{{ $funcionario->id }}</center></td>
            <td><center>{{ $funcionario->nome_funcionario }}</center></td>
            <td><center>{{ $funcionario->instrutor }}</center></td>
            <td><center>{{ $funcionario->cargo->nome_cargo }}</center></td> 
            <td><center>{{ $funcionario->cetor->nome_cetor }}</center></td>
            <td><center>{{ $funcionario->departamento->nome_departamento }}</center></td>
            <td><center>{{ $funcionario->situacao }}</center></td>
            <td>
                <center>
                <form action="{{ route('funcionarios.destroy',$funcionario->id) }}" method="POST" onsubmit="return confirm ('Tem certeza que deseja excluir o Funcionário selecionado?')">

                
 
                    <a class="btn btn-primary" href="{{ route('funcionarios.edit',$funcionario->id) }}">Editar</a>


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


   {!! $funcionarios->links() !!}


@endsection