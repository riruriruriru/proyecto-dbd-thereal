<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MovidosxChile') }}</title>

    <!-- Styles -->
    @section('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @show
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="position: fixed; width: 100%; top: 0px">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'MovidosxChile') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="/verOrganizaciones">Organizaciones</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="/verOrganizaciones">Organizaciones</a></li>
                            <li><a href="/RNV">RNV</a></li>
                        @if(Auth::user()->id_tipo_usuario === 1)
                            <li><a href="/crearUsuarios">Registrar Usuarios</a></li>
                        @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Catástrofes <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    @if(Auth::user()->id_tipo_usuario ===1 or Auth::user()->id_tipo_usuario ===2)
                                    <li><a href="/catastrofe">Ingresar Catástrofe</a></li>
                                    @endif
                                    <li>
                                        <a href="/verCatastrofe"> Ver Catástrofes</a>
                                        </form>
                                    </li>
                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    Medidas <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu"> 
                                    <li>
                                        <a href="/verMedida"> Ver Medidas</a>
                                        </form>
                                        
                                    </li>

                                </ul>
                            </li>

                         

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="/perfil">Editar Perfil</a></li>

                                    <li><a href="/verPerfil">Ver Perfil</a></li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        
                                    </li>

                                </ul>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>