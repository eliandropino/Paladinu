
@extends('layout.layout')
@section('principal')
@parent
@section('title','Novo')

{!!Form::open(array('action'=>'ProdutoController@postCriar','method'=>'POST'))!!}
<div class="row text-center">
<h1>Cadastro de Produtos</h1>
	@if ($errors->any())
 		<ul class="alert alert-warning">
 	@foreach($errors->all() as $error)
 		<li>{{ $error }}</li>
 	@endforeach
 		</ul>
 	@endif

	<div class="col-md-2 col-md-offset-4 ">
		<div class="form-group">
			{!!Form::text('descricao',null,['class'=>'form-control','required','placeholder'=>'Descrição'])!!}
		</div>
		<div class="form-group">
			{!!Form::text('valor', null,['class'=>'form-control','placeholder'=>'Valor'])!!}
		</div>
		{!!Form::submit('Salvar',['class'=>'btn btn-primary'])!!}
	</div>


</div>

{!!Form::close()!!}


@stop

