@extends('layout.app')
@section('title','Configurações')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-2">
        <painel titulo="Configurações" classe="fa fa-lg fa-settings">
          <!--<passport-at></passport-at> -->
          <label for="basic-url">Sua URL personalizada : </label>
          <url url="{{route('inicio.gerasorteio', ['id' => Auth::id()])}}" ></url>

          <button class="btn btn-danger" data-toggle="modal" data-target="#reset">
              Resetar TODOS os seus participantes
            </button>

            

          

            <!-- Modal -->
            <modal id="reset" titulo="Confirmar RESET dos participantes">
              <p>Ao clicar em "Confirmar RESET" você concorda que todos os dados serão apagados e assim podendo
                ocasionar conflitos caso algum participante não tenha sorteado ainda.</p>
              <p>Use o botão abaixo apenas se realmente necessário.</p>
              <span slot="footer">
                <form action="{{route('inicio.conf.reset', ['id' => Auth::id()])}}">
                  <button type="submit" class="btn btn-danger">Confirmar RESET</button>
                </form>
              </span>
            </modal>
        </painel>
      </div>
    </div>
  </div>

@endsection
