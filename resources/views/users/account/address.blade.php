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
                    <a href="#" class="bread-info-gen">Mi cuenta / </a>
                </li>
                <li>
                    <a class="bread-info-gen-strong">Mi dirección</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->


<!-- Inicia el container -->
<div class="container">
    <h4 class="font-h center">Mi dirección</h4>
    <hr class="hr-color">
</div><br>

<div class="container">
   <div class="row">
        <div class="col s12 m5">
            <h5 class="font-h">Mi información</h5><br>
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12 m3">
                            <h6 class="right-align">Nombre: </h6>
                            <h6 class="right-align">Apellidos: </h6>
                            <h6 class="right-align">Calle: </h6>
                            <h6 class="right-align">Colonia: </h6>
                            <h6 class="right-align">Municipio: </h6>
                            <h6 class="right-align">Ciudad: </h6>
                            <h6 class="right-align">Estado: </h6>
                            <h6 class="right-align">CP: </h6>
                            <h6 class="right-align">Teléfono: </h6>
                        </div>
                        <div class="col s12 m9">
                            <h6><b>{{$address->nombre}}</b></h6>
                            <h6><b>{{$address->apellidos}}</b></h6>
                            <h6><b>{{$address->calle}}</b></h6>
                            <h6><b>{{$address->colonia}}</b></h6>
                            <h6><b>{{$address->municipio}}</b></h6>
                            <h6><b>{{$address->ciudad}}</b></h6>
                            <h6><b>{{$address->estado}}</b></h6>
                            <h6><b>{{$address->cp}}</b></h6>
                            <h6><b>{{$address->telefono}}</b></h6>
                        </div>
                    </div>
                </div>
              </div>
        </div>



        <div class="col s12 m7">
            <h5 class="font-h">Editar información</h5><br>
            <form action="{{ route('account.updateAddress',['id' => $address->id]) }}" enctype='multipart/form-data' method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="input-field">
                    <input name="nombre" value="{{$address->nombre}}" id="nombre" type="text" class="validate">
                    <label for="nombre" class="active">Nombre</label>
                </div>

                <div class="input-field">
                    <input name="apellidos" value="{{$address->apellidos}}" id="apellidos" type="text" class="validate">
                    <label for="apellidos" class="active">Apellidos</label>
                </div>

                <div class="input-field">
                    <input name="calle" value="{{$address->calle}}" id="calle" type="text" class="validate">
                    <label for="calle" class="active">Calle</label>
                </div>

                <div class="input-field">
                    <input name="colonia" value="{{$address->colonia}}" id="colonia" type="text" class="validate">
                    <label for="colonia" class="active">Colonia</label>
                </div>

                <div class="input-field">
                    <input name="municipio" value="{{$address->municipio}}" id="municipio" type="text" class="validate">
                    <label for="municipio" class="active">Municipio</label>
                </div>

                <div class="input-field">
                    <input name="ciudad" value="{{$address->ciudad}}" id="ciudad" type="text" class="validate">
                    <label for="ciudad" class="active">Ciudad</label>
                </div>

                <div class="input-field">
                    <input name="estado" value="{{$address->estado}}" id="estado" type="text" class="validate">
                    <label for="estado" class="active">Estado</label>
                </div>

                <div class="input-field">
                    <input name="cp" value="{{$address->cp}}" id="cp" type="text" class="validate">
                    <label for="cp" class="active">CP</label>
                </div>
                <div class="input-field">
                    <input name="telefono" value="{{$address->telefono}}" id="telefono" type="text" class="validate">
                    <label for="telefono" class="active">Teléfono</label>
                </div>
                <input type="submit" class="btn waves-effect waves-light col s12" name="contacto" value="Editar información">


                </form>
        </div>
    </div>

</div><br>
@endsection
