@extends('layout.app')
@section('title','Sorteio')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-2">
        <painel titulo="Sorteio" classe="fa fa-lg fa-users sorteio">
            @if (Session::has('retorno'))
            <sorteado :dado="{{ Session::get('retorno') }}"></sorteado>
            @endif
            @if(count($nomes) <= 0)
                  <div class="alert alert-warning">
                    <p>Não existem participantes não sorteados </p>
                  </div>
            @else
            <form class="form-horizontal" method="POST" action="{{route('sorteio.realiza')}}">
                {{ csrf_field() }}
            <div class="form-horizontal">
                <label for="nome" class="col-md-4 control-label">Seu nome : </label>
                <div class="form-group">
                  <div class="col-md-6">
                      <select id="nome" class="form-control" name="nome" required>
                        @foreach ($nomes as $id)
                          <option value="{{$id->nome}}">{{$id->nome}}</option>
                        @endforeach
                      </select>

                 </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                      <button type="submit" onclick="return confirm('O participante escolhido está certo?') " class="btn btn-success" data-toggle="modal" data-target="#sorteio">
                          Realizar sorteio
                        </button>
                  </div>
                </div>
            </div>
          </form>
            @endif
        </painel>
        </div>
      </div>
  </div>

@endsection
