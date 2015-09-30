<div class="row text-center">
    <h1>Cadastro de Funcionario</h1>
    @if ($errors->any())
        <ul class="alert alert-warning">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="col-md-2 col-md-offset-4 ">
        <div class="form-group">
            {!!Form::text('nome',null,['class'=>'form-control','required','placeholder'=>'Insira o Nome'])!!}
        </div>
        <div class="form-group">
            {!!Form::number('rg', null,['class'=>'form-control','placeholder'=>'Insira o RG'])!!}
        </div>
        <div class="form-group">
            {!!Form::number('codigo', null,['class'=>'form-control','required','placeholder'=>'Insira o Usuário'])!!}
        </div>
        <div class="input-group">
            {!!Form::select('funcao',$funcoes,null,['class'=>'form-control','placeholder'=>'Função'])!!}

            <span class="input-group-btn">
       		<button class="btn btn-default " type="button" data-toggle="modal" data-target="#addFuncao">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            </button></span>
        </div><!-- /input-group -->
        <div class="form-group">
        </div>
    </div>

    <div class="col-md-2 text-center">
        <div class="form-group">
            {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Insira o Email'])!!}
        </div>
        <div class="form-group">
            {!!Form::select('sexo', array('M' => 'Masculino', 'F' => 'Feminino'), 'M',['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::password('senha',['class'=>'form-control','required','placeholder'=>'Insira a Senha'])!!}
        </div>
        <div class="form-group">
            {!!Form::number('chapa', null,['class'=>'form-control','placeholder'=>'Insira a Chapa'])!!}
        </div>
        {!!Form::submit('Salvar',['class'=>'btn btn-primary'])!!}
    </div>
    <div class="col-xd-1" >

    </div>

</div>