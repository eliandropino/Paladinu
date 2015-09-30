@extends('master')
@section('main')
<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Registration</h3>
        </div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="funcionarioid" value="{{ old('funcionarioid') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirmar Senha</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success">Registrar usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop