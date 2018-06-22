<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AMIGO OCULTO- @yield('title')</title>

    
    <!-- Styles -->
    <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon-user-secret.ico')}}"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" style="display: none">
        <div class="container">
        <nav class="navbar nav-efeito navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{route('inicio')}}">
                    <i class="fa fa-lg fa-user-secret bonecosegredo"> </i> AMIGO OCULTO
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                        @auth
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a class="nav-link" href="{{ route('inicio.sorteio') }}"><i class="fa fa-lg fa-users dosort"> </i> Realizar sorteio</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('inicio.cadastro') }}"><i class="fa fa-lg fa-user-plus addpart"></i> Cadastrar participante</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('inicio.resultado') }}"><i class="fa fa-lg fa-key"> </i> Resultados</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('inicio.conf') }}"><i class="fa fa-lg fa-cogs"> </i> Configurações</a></li>
                                                             
                        </ul>
                        @endauth 
                        <ul class="navbar-nav">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-lg fa-key"> </i> Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-lg fa-user-plus"> </i> Registrar</a>
                            </li>
                            @endguest
                            @auth
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-lg fa-sign-out-alt"></i> Sair ({{Auth::user()->name}})
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                            </li>
                            @endauth
                        </ul>
                </div>
            </nav>
        </div>
        
        <div class="mt-4">
                @yield('content')
        </div>
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!--<script src="{{ asset('js/custom.js') }}"></script> -->
</body>
</html>
