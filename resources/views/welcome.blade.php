@extends('layouts.app')

@section('content')

    <!-- INICIO MODAL LOGIN -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Body-->
                <div class="modal-body mb-0 p-0">
                    <div class="row h-100 justify-content-center align-items-center align-self-center">
                        <div class="col-md-8">
                            <div class="card my-5">
                                <div class="card-header">{{ __('Login') }}</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                       name="email" value="{{ old('email') }}" required autofocus>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                       name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-outline-danger btn-rounded btn-md"
                            data-dismiss="modal">Close
                    </button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- FIM MODAL LOGIN -->

    <!-- INICIO MODAL CADASTRO-->
    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Body-->
                <div class="modal-body mb-0 p-0">
                    <div class="row h-100 justify-content-center align-items-center align-self-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">{{ __('Cadastro') }}</div>

                                <div class="card-body">
                                    {!! Form::open() !!}
                                    <div class="form-group row">
                                        @csrf
                                        {!! Form::label('endereco', 'Endereço', [ 'class' => 'col-md-4 col-form-label text-md-right mb-3']) !!}
                                        <div class="col-md-6 mb-3">
                                            {!! Form::input('text', 'endereco', '' , ['class' => 'form-control']) !!}
                                        </div>

                                        {!! Form::label('numero', 'Numero', [ 'class' => 'col-md-4 col-form-label text-md-right mb-3']) !!}
                                        <div class="col-md-6 mb-3">
                                            {!! Form::input('text', 'numero', '' , ['class' => 'form-control']) !!}
                                        </div>

                                        {!! Form::label('cep', 'CEP', [ 'class' => 'col-md-4 col-form-label text-md-right mb-3']) !!}
                                        <div class="col-md-6 mb-3">
                                            {!! Form::input('text', 'cep', '' , ['class' => 'form-control']) !!}
                                        </div>

                                        {!! Form::label('contato1', 'Celular', [ 'class' => 'col-md-4 col-form-label text-md-right mb-3']) !!}
                                        <div class="col-md-6 mb-3">
                                            {!! Form::input('text', 'contato1', '' , ['class' => 'form-control']) !!}
                                        </div>

                                        {!! Form::label('contato2', 'Celular (opcional)', [ 'class' => 'col-md-4 col-form-label text-md-right mb-3']) !!}
                                        <div class="col-md-6 mb-3">
                                            {!! Form::input('text', 'contato2', '' , ['class' => 'form-control']) !!}
                                        </div>

                                        {!! Form::label('estado', 'Estado', [ 'class' => 'col-md-4 col-form-label text-md-right mb-3']) !!}
                                        <div class="col-md-6 mb-3">
                                            {!! Form::input('text', 'Estado', '' , ['class' => 'form-control']) !!}
                                        </div>

                                        {!! Form::label('cidade', 'Cidade', [ 'class' => 'col-md-4 col-form-label text-md-right mb-3']) !!}
                                        <div class="col-md-6 mb-3">
                                            {!! Form::input('text', 'cidade', '' , ['class' => 'form-control']) !!}
                                        </div>

                                        {!! Form::label('faculdade', 'Faculdade', [ 'class' => 'col-md-4 col-form-label text-md-right mb-3']) !!}
                                        <select id="faculdade" class="col-md-6 mb-3 form-control">
                                            <option value="Fatec Garça - Analise e Desenvolvimento de Sistemas">Fatec Garça - Analise e Desenvolvimento de Sistemas</option>
                                            <option value="Fatec Garça - Gestão Empresarial">Fatec Garça - Gestão Empresarial</option>
                                            <option value="Fatec Garça - Mecatronica">Fatec Garça - Mecatronica</option>
                                            <option value="Fatec Bauru - Banco de Dados">Fatec Bauru - Banco de Dados</option>
                                        </select>

                                    </div>
                                    {!! Form::close() !!}


                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                       name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                       name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                       name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control"
                                                       name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Registrar') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-outline-danger btn-rounded btn-md"
                            data-dismiss="modal">Close
                    </button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!-- FIM MODAL CADASTRO-->


    <form id="formPesquisa" class="positionSearchHome text-center">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Digite aqui sua pesquisa"
                   aria-label="Digite aqui sua pesquisa"
                   aria-describedby="btnAddServicos" id="info">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" id="btnAddServicos" onclick="pesquisar();"><img
                            src="img/lupa.svg" width="30px"></button>
            </div>
        </div>
    </form>

    <script>
        function pesquisar() {
            var form = document.getElementById('formPesquisa');
            var infoPesquisa = document.getElementById('info');

            form.addEventListener('submit', function (e) {
                // alerta o valor do campo
                window.open("https://www.google.com/search?ei=9owRXLnBKcWjwATPzoWwBA&q=intitle%3A" + infoPesquisa.value);

                // impede o envio do form
                e.preventDefault();
            });
        }
    </script>
@endsection