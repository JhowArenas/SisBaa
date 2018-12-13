<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>B.A.A. - Busca e Auxilio Aprendizagem</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sbaa.css') }}" rel="stylesheet">
</head>
<body>
<table class="h-100 w-100   ">
    <tbody>
    <tr class="h-100 m-0" id="app">
        <td class="h-100 w-25 p-0">
            <div class="p-0 h-100">
                <div class="masthead">
                    <div class="masthead-bg">
                        <a href="http://127.0.0.1:8000"><img src="{{ asset('img/logo.png') }}" class="logo" width="200px"></a>
                        <div class="d-flex justify-content-end font-weight-bold p-2">
                            @guest
                                <a class="btn btn-outline-sbaa font-weight-bold m-1"
                                   data-toggle="modal" data-target="#modalLogin">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                    <a class="btn btn-outline-sbaa font-weight-bold m-1"
                                       data-toggle="modal" data-target="#modalCadastro">{{ __('Register') }}</a>
                                @endif
                            @else
                                <div class="dropdown">
                                    <button class="btn btn-outline-light font-weight-bold m-1 dropdown-toggle"
                                            type="button" id="dropdownMenu2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu w-25" aria-labelledby="dropdownMenu2">
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                           class="dropdown-item">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @endguest
                        </div>
                    </div>
                    @if(Auth::guest())
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 my-auto">
                                    <div class="masthead-content text-white py-5 py-md-0">
                                        <h1 class="mb-3">Pesquise Aqui!!</h1>
                                        <p class="mb-5">Realize suas pesquisas com maior agilidade e precisão!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 my-auto">
                                    <div class="masthead-content text-white py-5 py-md-0">
                                        <h1 class="mb-3">Ola {{ Auth::user()->name }}!!</h1>
                                        <p class="mb-5">Aproveite ao máximo nosso site, sua evolução é nossa meta!!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                        <div class="d-flex justify-content-center w-75 helloRobot">
                            <div class="w-75">
                                <img src="{{ asset('img/gif.gif') }}" width="100%" height="100%">
                            </div>
                        </div>
                </div>
            </div>
        </td>
        <td class="h-100 w-75 m-0 p-0" id="app">
            <div class="container">
                <main>
                    @yield('content')
                </main>
            </div>
            @if(Auth::guest())

            @else
                <div class="social-icons">
                    <ul class="list-unstyled text-center mb-0">
                        <li class="list-unstyled-item d-none">
                            <a href="#">
                            </a>
                        </li>
                        <li class="list-unstyled-item">
                            <a href="{{ url('playlist') }}">
                                <div class="videoaulas">Videoaulas!!</div>
                            </a>
                        </li>
                        <li class="list-unstyled-item">
                            <a href="#">
                                <div class="addfontes">Adicione um novo filtro!!</div>
                            </a>
                        </li>
                    </ul>
                </div>

            @endif
        </td>
    </tr>
    </tbody>
</table>

</body>
</html>
