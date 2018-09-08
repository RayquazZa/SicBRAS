@extends('adminlte::page')

@section('title', 'Módulo de Treinamento')

@section('content_header')
    <h1>Gerenciador de Arquivos</h1>
@stop

@section('content')
<form class:"form-upload" method="post" action="{{url('excelUpload')}}" enctype="multipart/form-data">
<div class:"form-group">
<label for="file">Excel upload</label>
<input type="file" id="arquivo" name="excel_arquivos">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-primary" id="upload_file">Submit</button>
</form>
@stop
