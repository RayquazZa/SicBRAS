$('#menu li').click(function(){
$('#conteudo').load( this.data("target") );
})