@extends('layout.app')
@section('title','Resultados')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-2">
        <painel titulo="Resultado do amigo oculto" classe="fa fa-lg fa-users sorteio">
          <resultados :users="{{$participantes}}"></resultados>
        </painel>
      </div>
    </div>
  </div>

@endsection
