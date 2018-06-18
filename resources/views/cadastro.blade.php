@extends('layout.app')
@section('title','Cadastro')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-xs-12 col-md-8">
        <painel titulo="Cadastrar participantes" classe="fa fa-lg fa-user-plus cadastro">
            @if (Session::has('usuarios'))
            <alerta :dado="{{ Session::get('usuarios') }}"></alerta>
            @endif
            <form class="form-horizontal" method="POST" action="{{route('cadastro.realiza')}}">
                {{ csrf_field() }}
                <input type="hidden" name="owner_id" value="{{Auth::id()}}">
                <div class="form-group {{ $errors->has('nome') ? ' has-error' : '' }}">
                  <label for="nome" class="col-md-4 control-label">Nome do participante :</label>
                  <div class="col-md-6">
                    <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" placeholder="Evite acentos" required autofocus>
  
                    @if ($errors->has('nome'))
                      <span class="help-block">
                        <strong>{{ $errors->first('nome') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>
  
                <div class="form-group">
                  
                  <div class="col-md-6 ">
                    <button type="submit" class="btn btn-primary">
                      Cadastrar participante
                    </button>
                  </div>
                </div>
            </form>
        </painel>
      </div>
    </div>
  </div>
@endsection