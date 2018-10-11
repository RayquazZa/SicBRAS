@extends('adminlte::page')

@section('title', 'Controle de Qualidade')

@section('content_header')
    <h1>Analise Fisico</h1>
@stop

@section('content')
    <div class="container box box-success">
        <br>
        <div class="row">
            <div class="col-md-4">
            Data:  <input type="text" class="form-control" placeholder="Insira a Data">  
            Nº BAG/Referência <input type="text" class="form-control" placeholder=""> 
            Produto:  <input type="text" class="form-control" placeholder="Insira o nome do Produto"> 
            </div>
            
        </div>

 <br><br>
          
       <h2>Peneiras</h2>
      
        <div class="row">
            <div class="col-md-4">
           
<br><br> 
            <div class="col-md-4">
               Peneira 1:<input type="text" class="form-control" placeholder="Insira o nome"> 
               Maximo: <input type="text" class="form-control" placeholder="Insira o valor">    
               Minimo:<input type="text" class="form-control" placeholder="Insira o valor">    
                
            </div>


              <div class="col-md-4">
               Peneira 2 :<input type="text" class="form-control" placeholder="Insira o nome"> 
               Maximo: <input type="text" class="form-control" placeholder="Insira o valor">    
               Minimo:<input type="text" class="form-control" placeholder="Insira o valor">    
                  
            </div>

              <div class="col-md-4">
               Peneira 3: <input type="text" class="form-control" placeholder="Insira o nome"> 
               Maximo: <input type="text" class="form-control" placeholder="Insira o valor">    
               Minimo:<input type="text" class="form-control" placeholder="Insira o valor">    
           
            </div>
 
     </div>
           
</div> 
<br><br>
         <div class="row"">
          <div class="col-md-4">
              <div class="col-md-4">
               Fundo: <input type="text" class="form-control" placeholder="Insira o nome"> 
               Maximo: <input type="text" class="form-control" placeholder="Insira o destino">    
               Minimo: <input type="text" class="form-control" placeholder="Insira o Status">          
            </div>
          </div>
       </div>
<br><br>
<h3>Resultados</h3> 

     <div class="row"> 
           <div class="col-md-4">
              
<br><br>
            <div class="col-md-4">
               Peneira 1: <input type="text" class="form-control" placeholder="Insira o nome">    
               Resultado pesado: <input type="text" class="form-control" placeholder="">  
               Resultado Encontrado: <input type="text" class="form-control" placeholder="">   
            </div>

              <div class="col-md-4">
               Peneira 2: <input type="text" class="form-control" placeholder="Insira o nome"> 
               Resultado pesado: <input type="text" class="form-control" placeholder=""> 
               Resultado Encontrado: <input type="text" class="form-control" placeholder="">    
            </div>


             <div class="col-md-4">
               Peneira 3: <input type="text" class="form-control" placeholder="Insira o nome"> 
               Resultado pesado: <input type="text" class="form-control" placeholder=""> 
               Resultado Encontrado: <input type="text" class="form-control" placeholder="">
             </div>
         </div>
   </div>

<br><br>
      <div class="row"> 
           <div class="col-md-4">

            <div class="col-md-4">
               Fundo: <input type="text" class="form-control" placeholder="Insira o nome"> 
               Resultado pesado: <input type="text" class="form-control" placeholder=""> 
               Resultado Encontrado: <input type="text" class="form-control" placeholder="">
             </div>
         </div>
     </div>
      <br><br>    
 <div class="row">
        <div class="col-md-8">
            <div class="col-md-4">
               Equipamento:  <input type="text" class="form-control" placeholder="">    
               tela:  <input type="text" class="form-control" placeholder="">   
               Responsavel:   <input type="text" class="form-control" placeholder="Insira nome do responsavel">  
            </div>
            
            <div class="col-md-4">
               Destino: <input type="text" class="form-control" placeholder="Insira o destino">    
               Status: <input type="text" class="form-control" placeholder="Insira o Status">    
               Quantidade: <input type="text" class="form-control" placeholder="">  
            </div>
            <div class="col-md-4">
                Gramas:  <input type="text" class="form-control" placeholder="Insira a Grama">  
                Alimentação: <input type="text" class="form-control" placeholder=""> 
                Ordem de produção:  <input type="text" class="form-control" placeholder=""> 
            </div>
         </div>

  </div>
   




<br><br>
     <div class="row">
         <div class="col-md-4">
                 <button type="button" class="btn btn-success btn-flat btn-sic">Visualizar</button>
          
          <div class="col-md-4">
                <button class="btn btn-block btn-flat btn-light">Cancelar</button>
          </div>

          <div class="col-md-4">
                <button class="btn btn-sic btn-success btn-block btn-flat ">Salvar</button>
          </div>
     </div>
    </div>

<br><br>

<div class="row">
         <div class="col-md-4">
           
          
            <div class="col-md-4">
                <button type="button" class="btn btn-danger btn-flat">Botão Deletar</button>
            </div>

            <div class="col-md-4">
                <button type="button" class="btn btn-primary btn-flat">Botão Editar</button>
            </div>
        </div>
    </div>
  </div>
@stop