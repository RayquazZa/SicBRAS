@extends('adminlte::page')

@section('title', 'Módulo de Qualidade')

@section('content_header')
    <div id="conteudo" style="margin-top: -30px;">
    <div class="row">
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 10px">Coloque % aqui</sup></h3>

              <p>Estatisticas</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Veja mais... <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>
              <p>Prazos</p>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
            </div>
            <a href="#" class="small-box-footer">Veja mais... <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>65</h3>

              <p>Porcentagem</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Veja mais... <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <div class="box box-success" style="position: relative; left: 0px; top: 0px;">
       
              
      </div>
@stop

@section('content')
    
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
                    "Search": "Pesquisar",
                    "info": "Visualizando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
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
                <th>Nome</th>
                <th>Funcao</th>
                <th>Cidade</th>
                <th>Idade</th>
                <th>Data de Inicio</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Lucas</td>
                <td>Tecnico de Informática</td>
                <td>Hong Kong</td>
                <td>$372,000</td>
                <td>22</td>
                <td>10/08/2018</td>
            </tr>
            <tr>
                <td>Anselmo</td>
                <td>Analista de Sistemas</td>
                <td>Hong Kong</td>
                <td>22</td>
                <td>10/08/2018</td>
                <td>R$3,800</td>
            </tr>
            <tr>
                <td>Tadeu</td>
                <td>Tecnico de Informática</td>
                <td>Hong Kong</td>
                <td>22</td>
                <td>10/08/2018</td>
                <td>R$3,800</td>
            </tr>
            <tr>
                <td>Luan Bispo</td>
                <td>Arquiteto de Sistemas</td>
                <td>Hong Kong</td>
                <td>22</td>
                <td>10/08/2018</td>
                <td>R$3,800</td>
            </tr>
            <tr>
                <td>Arvilla Carvalho</td>
                <td>Desenvolvedor de Sistemas</td>
                <td>Hong Kong</td>
                <td>21</td>
                <td>30/04/2018</td>
                <td>R$5,700</td>
            </tr>
            <tr>
                <td>Celso Barreto</td>
                <td>Professor</td>
                <td>Canadá</td>
                <td>48</td>
                <td>02/03/2018</td>
                <td>R$1,250</td>
            </tr>
            <tr>
                <td>Washington O Cara</td>
                <td>Professor</td>
                <td>Canadá</td>
                <td>48</td>
                <td>02/03/2018</td>
                <td>R$1,250</td>
            </tr>
            <tr>
                <td>Cheli Mendes</td>
                <td>Professor</td>
                <td>Canadá</td>
                <td>48</td>
                <td>02/03/2018</td>
                <td>R$1,250</td>
            </tr>
            <tr>
                <td>Everanildo Souza</td>
                <td>Professor</td>
                <td>Canadá</td>
                <td>48</td>
                <td>02/03/2018</td>
                <td>R$1,250</td>
            </tr>
            <tr>
                <td>Linaldo Assunção</td>
                <td>Coordenador</td>
                <td>Brasil</td>
                <td>48</td>
                <td>02/03/2018</td>
                <td>R$3,430</td>
            </tr>
             <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>R$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>R$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>R$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>R$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>R$3,800</td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <th>Nome</th>
                <th>Posição</th>
                <th>Cidade</th>
                <th>Idade</th>
                <th>Data de Inicio</th>
                <th>Salario</th>
            </tr>
        </tfoot>
    </table>
    </div>
@stop
