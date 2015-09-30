@extends('layout.layout')

@section('principal')
@parent
@section('title','Produtos')
<div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a class="btn btn-primary" href="{{action('ProdutoController@getNovo')}}">Novo</a>
                    </div>
                    <div class="col-md-9">
                        <form role="form">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Procurar Produto">
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
                                    <th>Descricao</th>
                                    <th>Valor</th>
                                    <th>Ativo</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($produtos as $produto)
                                 <tr>
								 <td>{{ $produto->id }}</td>
								 <td>{{ $produto->descricao }}</td>
								 <td>R$ {{ $produto->valor }}</td>
								 <td>
                                     @if ($produto->ativo == 't')<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                     @else <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                     @endif
                                 </td>
							     <td><a href="#"><span color="#FF0000" class="glyphicon glyphicon-arrow-down iconRed" aria-hidden="true"></span></a> <a href=""><span class="glyphicon glyphicon-pencil iconBlue" aria-hidden="true"></span></a></td>
                                </tr>
                             @endforeach  
                            </tbody>
                            
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        
                            {!! $produtos->render() !!}
                        
                    </div>
                </div>
            </div>
        </div>

@stop