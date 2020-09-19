@extends('layouts.app')
@section('content')
<div class="row">
    <div class="s12 m12">
        <div class="bread-top-info bread-back-padd">

            <ul>
                <li>
                    <a href="#" class="bread-info-gen">Carrito/</a>
                </li>
                <li>
                    <a class="bread-info-gen-strong">Guardar grabado y numero</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<div class="container">
    <div class="row">
        <div class="col s12 m9">
            @foreach ($carrito as $item)
            <form class="form-row formularioproducto" action='{{url('/detallecarro/'.$item->idcartgrabado)}}' method='POST' enctype="multipart/form-data"><br>
                {{csrf_field()}}
                <h4>Grabado y numero</h4>
                <div class="input-field col s12">
                    <input type="text" class="validate" value="{{$item->grabado}}" name="grabado"id="grabado" placeholder="Escriba el grabado">
                    <label for="categoria">Grabado</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" class="validate" value="{{$item->numero}}" name="numero" id="numero" placeholder="Escriba el numero">
                    <label for="categoria">Numero</label>
                </div>
                <div class="center"><br>
                    <button type="submit" value="editar" class="waves-effect waves-light btn-small">Guardar</button>
                </div><br>
        </form>
        @endforeach
    </div>
</div>
@endsection