@extends('adminlte::page')

@section('title', 'Controle de Qualidade')

@section('content_header')
   <center>
    <h3 style="margin-top: -40px;">Cadastro de Clientes</h3>
   </center>
   <br><br>

   <style type="text/css">
     body{
        overflow: hidden;
     }
   </style>
@stop

@section('content')
 
<form action="{{ route('cliente.store') }}" method="POST">
    @csrf
    <div class="container box box-success">        
        <br><h4>Informações Referentes ao Cliente</h4><br>
        <div class="row">
            <div class="col-md-4">
                <!-- COLUNA 1 -->
                <input type="text" name="nome" class="form-control" placeholder="Informe Nome do Cliente "  required='true'><br>
                <input type="text" name="email" class="form-control " placeholder="Informe o E-mail" required><br>

            </div>    
            <div class="col-md-4">
                <!-- COLUNA 2 -->
                <input type="text" name="cpf" class="form-control " placeholder="Informe Número da CPF" onkeydown="javascript: fMasc( this,  mCPF );" maxlength="14" required ><br>
                
                <input type="text" name=cnpj class="form-control " placeholder="Informe Número da CNPJ" onkeydown="javascript: fMasc( this,  mCNPJ );" maxlength="20" required ><br>
                    

            </div>
            <div class="col-md-4">
                <!-- COLUNA 3 -->
                <input type="text" name="nm_telefone" class="form-control " onkeydown="javascript: fMasc( this, mTel );" placeholder="Informe Número do Telefone" maxlength="14" required><br>
            </div>
        </div>
            <h4>Informações Referentes ao Endereço</h4><br>
        <div class="form-row ">
            <div class="row">
                <div class="col-md-4">
                    <!-- COLUNA 1 -->
                    <input type="text" name="cep" class="form-control " maxlength="9" onkeydown="javascript: fMasc( this, mCEP );" placeholder="Cep" required  >
                    <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/ "  target="_blanck" >Buscar CEP</a><br>
                    <input type="text" class="form-control " name="cidade" placeholder="Cidade" required>
                </div>
        
                <div class="col-md-4">
                    <!-- COLUNA 2 -->
                    <input type="text" class="form-control " name="endereco"  placeholder="Endereço" required><br>
                    <input type="text" class="form-control" maxlength="2" name="estado" placeholder="Estado" required><br>
                </div>
        
                <div class="col-md-4">
                    <!-- COLUNA 3 -->
                    <input type="text" class="form-control " name="bairro"  placeholder="Bairro" required><br>
                    <input type="text" class="form-control " name="numero" placeholder="Informe o Número do Endereço" required=""><br>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
        
                <div class="col-md-4">
                    <button class="btn btn-block btn-flat btn-light" type="reset" onclick="#">Cancelar</button>
                </div>
                
                <div class="col-md-4">
                    <button type="submit" class="btn btn-sic btn-success btn-block btn-flat">Cadastrar Cliente </button>
                </div>
            </div>
        </div>
    </div>
</form>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        
            function fMasc(objeto,mascara) {
                obj=objeto
                masc=mascara
                setTimeout("fMascEx()",1)
            }
            function fMascEx() {
                obj.value=masc(obj.value)
            }
            function mTel(tel) {
                tel=tel.replace(/\D/g,"")
                tel=tel.replace(/^(\d)/,"($1")
                tel=tel.replace(/(.{3})(\d)/,"$1)$2")
                if(tel.length == 9) {
                    tel=tel.replace(/(.{1})$/,"-$1")
                } else if (tel.length == 10) {
                    tel=tel.replace(/(.{2})$/,"-$1")
                } else if (tel.length == 11) {
                    tel=tel.replace(/(.{3})$/,"-$1")
                } else if (tel.length == 12) {
                    tel=tel.replace(/(.{4})$/,"-$1")
                } else if (tel.length > 12) {
                    tel=tel.replace(/(.{4})$/,"-$1")
                }
                return tel;
            }
            function mCNPJ(cnpj){
                cnpj=cnpj.replace(/\D/g,"")
                cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
                cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
                cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1 / $2")
                cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
                cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1-$2")
                return cnpj
            }
            function mCPF(cpf){
                cpf=cpf.replace(/\D/g,"")
                cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
                cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
                cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
                return cpf
            }
            function mCEP(cep){
                cep=cep.replace(/\D/g,"")
                cep=cep.replace(/^(\d{2})(\d)/,"$1.$2")
                cep=cep.replace(/\.(\d{3})(\d)/,"$1$2")
                return cep
            }
        

            $(document).ready(function() {

                $('#cpf').click(function(){
                    $('#cnpj').css('display','none');

                });
                
                $('#cnpj').click(function(){
                    $('#cpf').css('display','none');
                    
                });
                

                function limpa_formulário_cep() {
                    // Limpa valores do formulário de cep.
                    $("#endereco").val("");
                    $("#bairro").val("");
                    $("#cidade").val("");
                    $("#uf").val("");

                }

                //Quando o campo cep perde o foco.
                $("#cep").blur(function() {

                    //Nova variável "cep" somente com dígitos.
                    var cep = $(this).val().replace(/\D/g, '');

                    //Verifica se campo cep possui valor informado.
                    if (cep != "") {

                        //Expressão regular para validar o CEP.
                        var validacep = /^[0-9]{8}$/;

                        //Valida o formato do CEP.
                        if(validacep.test(cep)) {

                            //Preenche os campos com "..." enquanto consulta webservice.

                            $("#bairro").val("...");
                            $("#cidade").val("...");
                            $("#uf").val("...");
                            $("#endereco").val("...");

                            //Consulta o webservice viacep.com.br/
                            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                                if (!("erro" in dados)) {
                                    //Atualiza os campos com os valores da consulta.
                                    $("#endereco").val(dados.logradouro);
                                    $("#bairro").val(dados.bairro);
                                    $("#cidade").val(dados.localidade);
                                    $("#uf").val(dados.uf);

                                } //end if.
                                else {
                                    //CEP pesquisado não foi encontrado.
                                    limpa_formulário_cep();
                                    alert("CEP não encontrado.");
                                }
                            });
                        } //end if.
                        else {
                            //cep é inválido.
                            limpa_formulário_cep();
                            alert("Formato de CEP inválido.");
                        }
                    } //end if.
                    else {
                        //cep sem valor, limpa formulário.
                        limpa_formulário_cep();
                    }
                });
            });
    </script>





@stop