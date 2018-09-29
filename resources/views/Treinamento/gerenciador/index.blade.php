@extends('adminlte::page')

@section('title', 'Módulo de Treinamento')

@section('content_header')

<!--Link for bower css -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="/bower_components/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="/bower_components/blueimp-file-upload/js/jquery.fileupload.js"></script>
<link rel="stylesheet" type="text/css" href="/bower_components/blueimp-file-upload/css/jquery.fileupload-ui.css">
<link rel="stylesheet" type="text/css" href="/bower_components/blueimp-file-upload/css/jquery.fileupload.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Selecione Os Arquivos...</span>
        
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="documento" 
        data-token="{!! csrf_token() !!}"
        data-user-id="{!! $user->id !!}">
    </span>
    <br>
    <br>

<!-- Script for Searching the Files  --> 

<script>
	;(function($)
	{
	  'use strict';
	  $(document).ready(function()
	  {
	  	var $fileupload     = $('#fileupload'),
	  		$upload_success = $('#upload-success');
	    $fileupload.fileupload({
	        url: '/upload',
	        formData: {_token: $fileupload.data('token'), userId: $fileupload.data('userId')},
	        progressall: function (e, data) {
	            var progress = parseInt(data.loaded / data.total * 100, 10);
	            $('#progress .progress-bar').css(
	                'width',
	                progress + '%'
	            );
	        },
	        done: function (e, data) {
	        	$upload_success.removeClass('hide').hide().slideDown('fast');
			    setTimeout(function(){
			    	location.reload();
			    }, 2000);
			}
	    });
	  });
	})(window.jQuery);
</script>

     <!-- The global progress bar -->
    <div id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>
    
    <!-- The container for the uploaded files -->
    <div id="fileupload" class="file"></div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Gerenciar Itens do Upload</h3>
        </div>
        
         @if(Session::has('success'))
						<div class="alert alert-success">
							{!! Session::get('success') !!}
						</div>
				    @endif

    <!-- table -->
    <table class="table table-bordered table-striped table-hvover"> 
        <thead>
            <tr>
            <th>Nome</th>
            <th>Enviado em</th>
            <th>Usuário</th>
            <th>Ações</th>
            </tr>
            	@foreach($user->files as $file)
				    		<tr>
				    			<td>{!! $file->name !!}</td>
				    			<td>{!! $file->created_at !!}</td>
				    			<td>{!! $user->name !!}</td>
				    			<td>
				    				<a href="{!! route('files.download', [$user->id, $file->id]) !!}" class="btn btn-xs btn-success">download</a>
				    				<a href="{!! route('files.destroy', [$user->id, $file->id]) !!}" class="btn btn-xs btn-danger">excluir</a>
				    			</td>
				    		</tr>
				    		@endforeach
        </thead>
    </table> 
    
    @endsection