@extends('layouts.app')

@section('content')

<!-- Inicia breadcrumb indice de paginas -->
<div class="row">
    <div class="s12 m12">
        <div class="bread-top-info bread-back-padd">

            <ul>
                <li>
                    <a href="#" class="bread-info-gen">Home /</a>
                </li>
                <li>
                    <a class="bread-info-gen-strong">Mi Cuenta</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->

<div class="container">

    <div>
        <h4 class="font-h center">Mi cuenta</h4>
        <hr class="hr-color">
    </div><br>

            <div class="container-account"><br>
                <div class="row">

                    <div class="col s12 m6">
                        <h4>Mis datos</h4>
                        <div class="row">
                            <div class="col s12 m9">
                              <div class="card">
                                <div class="card-image-account">
                                  <img class="center" src="{{ asset('img/user.jpg') }}">
                                  <span class="card-title black-text">&nbsp&nbsp&nbsp &#64{{auth()->user()->name}}</span>
                                </div>
                                <div class="card-content">
                                <center>
                                    <h6>Nombre: {{auth()->user()->name}}</h6>
                                    <h6>Apellidos: {{auth()->user()->apellidos}}</h6>
                                    <h6>Email: {{auth()->user()->email}}</h6><br>
                                    <div>
                                        <a href="{{ route('account.address',['id' => $users->id]) }}" class="btn waves-effect waves-light col s12" name="contacto">Mi dirección</a>
                                    </div><br><br>
                                    <div>
                                        <a href="{{ route('account.shopping') }}" class="btn waves-effect waves-light col s12" name="compras">Mis compras</a>
                                    </div><br><br>
                                </center>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                    <div>
                        <form action="{{ route('account.update',['id' => $users->id]) }}" enctype='multipart/form-data' class="col s12 m6"  method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                        <h4>Editar datos</h4>
                        <div class="row">
                            <div class="input-field col s6">
                            <input id="name" type="text" name="name" class="validate" value="{{$users->name}}">
                            <label for="name" class="active">Nombre</label>
                            </div>
                            <div class="input-field col s6">
                            <input id="last_name" type="text" name="apellidos" class="validate" value="{{$users->apellidos}}">
                            <label for="last_name" class="active">Apellidos</label>
                            </div>
                        </div><br>

                        <div>
                            <h6><strong>Nota: Si no sesea cambiar la contraseña deje el campo en blanco.</strong></h6>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                            <input id="password" type="password" name="password" class="validate">
                            <label for="password">Password</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                            <input id="email" type="email" name="email" class="validate" value="{{$users->email}}">
                            <label for="email" class="active">Email</label>
                            </div>
                        </div>

                        <div>
                            <input type="submit" class="btn waves-effect waves-light col s12" name="contacto" value="Editar información">
                        </div>

                        </form>
                    </div>

                </div>

            </div>
    </div>


</div><br><br>
@endsection
