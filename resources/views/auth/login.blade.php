@extends('layouts.app') @section('content')

<div class="container">
    <h4 class="font-h">Inicia sesión</h4>
    <hr class="hr-color">
</div><br>

<div class="container">
    <div class="row">
        <div class="col m4"></div>

        <div class="col s12 m5 center">
            <div class="card login-custom">

                <div class="row">

                    <div class="card-content">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h4>Login</h4><br>

                            <div class="input-field">
                                <input
                                    id="email"
                                    type="email"
                                    class="validate @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required="required"
                                    autocomplete="email">
                                <label for="email">Usuario</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-field">
                                <input
                                    id="password"
                                    type="password"
                                    class="validate @error('password') is-invalid @enderror"
                                    name="password"
                                    required="required"
                                    autocomplete="current-password">
                                <label for="password">Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="left">
                                <label for="remember">
                                    <input
                                        type="checkbox"
                                        name="remember"
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <span>¡Recordar!</span>
                                </label>

                            </div>

                            <div class="login-margin">
                                <button
                                    type="submit"
                                    class="waves-effect waves-light btn-small left col m12 s12">
                                    {{ __('Login') }}
                                </button>
                            </div><br>

                        </form>

                        <h6 class="login-margin">¡O inicia sesión con!</h6>

                        <div class="login-margin">
                            <a
                                href="#"
                                class="btn-floating btn-large waves-effect waves-light blue darken-4 login-margin-right">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="btn-floating btn-large waves-effect waves-light red">
                                <i class="fab fa-google"></i>
                            </a>
                        </div>

                        <div class="login-margin">
                            @if (Route::has('password.request'))
                            <a class="right" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a><br>
                            @endif

                            <a class="right" href="{{ route('register') }}">
                                {{ __('¡Registrate!') }}
                            </a>

                        </div><br>

                    </div>
                </div>

            </div>
        </div>
        <div class=" col m3 "></div>
    </div>
</div><br>

@endsection