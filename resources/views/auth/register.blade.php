@extends('layouts.app')

@section('content')

<div class="container">
    <h4 class="font-h">Iniciar Registro</h4>
    <hr class="hr-color">
</div><br>

<div class="container">
    <div class="row">
        <div class="col m4">
        </div>
        <div class="col s12 m5 center">
            <div class="card login-custom">
                <div class="row">
                    <div class="card-content">






                    <form method="POST" action="{{ route('register') }}">
                        <h4>Registro</h4><br>
                        @csrf

                        <div class="input-field">
                                <input id="name" type="text" class="validate @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <label for="name" class="">{{ __('Nombre') }}</label>
                                @error('name')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="input-field">
                            <input id="apellidos" type="text" class="validate @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>
                            <label for="apellidos" class="">{{ __('apellidos') }}</label>
                            @error('apellidos')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                        <div class="input-field">
                                <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <label for="email" class="">{{ __('E-Mail') }}</label>
                                @error('email')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-field">
                                <input id="password" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <label for="password" class="">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="input-field">
                                <input id="password-confirm" type="password" class="validate" name="password_confirmation" required autocomplete="new-password">
                                <label for="password-confirm" class="">{{ __('Confirma Password') }}</label>
                        </div><br>

                        <div>
                                <button type="submit" class="waves-effect waves-light btn-small left col m12 s12">
                                    {{ __('Registrarse') }}
                                </button>                            
                        </div>

                        <h6 class="login-margin">¡O registrate con alguna red social!</h6>

                        <div class="login-margin">
                            <a href="{{ url('/auth/redirect/facebook') }}" class="btn-floating btn-large waves-effect waves-light blue darken-4 login-margin-right"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ url('/auth/redirect/google') }}" class="btn-floating btn-large waves-effect waves-light red"><i class="fab fa-google"></i></a>
                        </div>
                        <div class="login-margin"></div>


                    </form>





                        </div>
                    </div>

                </div>
            </div>
            <div class=" col m3 ">
            </div>

        </div>
    </div>
@endsection
