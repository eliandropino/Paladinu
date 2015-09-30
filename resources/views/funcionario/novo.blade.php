
@extends('layout.layout')
@section('principal')
@parent
@section('title','Novo')

{!!Form::open(array('route'=>'funcionario.criar','method'=>'POST'))!!}
@include('forms.funcionario');
{!!Form::close()!!}

<div class="modal fade bs-example-modal-sm" id="addFuncao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content ">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Adicionar nova Função</h4>
			</div>
			<div class="modal-body">
				{!!Form::open(array('route'=>'funcionario.criarFuncao','method'=>'POST'))!!}
				<div class="form-group">
					{!!Form::text('descricao',null,['class'=>'form-control','required','placeholder'=>'Insira a Descrição'])!!}
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				{!!Form::submit('Salvar',['class'=>'btn btn-primary'])!!}
			</div>
			{!!Form::close()!!}
		</div>
	</div>
</div>
@stop

