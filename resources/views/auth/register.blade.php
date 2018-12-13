@extends('layouts.app')

@section('content')
    <div class="container h-100">
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

                                {!! Form::label('cidade', 'Cidade', [ 'class' => 'col-md-4 col-form-label text-md-right mb-3']) !!}


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
@endsection
