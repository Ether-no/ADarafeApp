@extends('layouts.app') @section('content')


    <div class="container">
        <h4 class="font-h">Recupera tu contraseña</h4>
        <hr class="hr-color">
    </div><br>
    
    <div class="container">
        <div class="row">
        <div class="col m4"></div>
        
        
        
        
      {{-- Darle mas espacio a lo largo de la tarjeta --}}

      
<div class="col s12 m5 center">

    <div class="card login-custom">

        <div class="row">

            <div class="card-content">
               <h6 class="left">Ingresa tu correo electrónico</h6><br><br>      

               

                    @if (session('status'))
                        <div class="" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        
                        @csrf

                        <div class="input-field">
                            <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            <label for="email">Email</label>
                            @error('email')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><br>

                        <div>
                            <button type="submit" class="waves-effect waves-light btn-small left col m12 s12">
                                {{ __('Envíar link') }}
                            </button><br>
                        </div>

                    </form>

            </div>

</div>
    </div>

</div>








                    

    <div class=" col m3 "></div>
</div>
</div><br>
@endsection
