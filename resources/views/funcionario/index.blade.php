@extends('layout.layout')

@section('principal')
@parent
@section('title','Funcionarios')
<div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a>{!!link_to_route('funcionario.novo', $title = 'Novo', null, $attributes = ['class'=>'btn btn-primary'])!!}</a>
                    </div>
                    <div class="col-md-9">
                        <form role="form">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Procurar Funcionário">
                                    <span class="input-group-btn">
                                        <a class="btn btn-success" type="submit">Buscar</a>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo</th>
                                    <th>Nome</th>
                                    <th>Chapa</th>
                                    <th>Função</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($funcionarios as $funcionario)
                                 <tr>
								 <td>{{ $funcionario->id }}</td>
								 <td>{{ $funcionario->codigo }}</td>
								 <td>{{ $funcionario->nome }}</td>
								 <td>{{ $funcionario->chapa }}</td>
								 <td>{{ $funcionario->descricao }}</td>
							     <td>{!!link_to_route('funcionario.editar', $title = '', $parameters = $funcionario->codigo, $attributes = ['class'=>'glyphicon glyphicon-pencil iconBlue'])!!} <a href=""><span class="glyphicon glyphicon-arrow-down iconRed" aria-hidden="true"></span></a></td>
                                </tr>
                             @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        
                            {!! $funcionarios->render() !!}
                        
                    </div>
                </div>
            </div>
        </div>

@stop