@extends('layouts.app')
@section('content')
<div class="row">
    <div class="s12 m12">
        <div class="bread-top-info bread-back-padd">

            <ul>
                <li>
                    <a href="{{route('index')}}" class="bread-info-gen">Carrito/</a>
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

        <h4>Grabado y numero</h4>
        <div class="row">
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-content">
                        <h5>Detalles:</h5>
                        @foreach($cart as $carts)
                            <p>Descripción: <b>{{$carts->descripcion}}</b> </p>
                            <p>Cantidad: <b>{{$carts->cantidad}}</b> </p>
                        @endforeach    
                        @foreach($carrito as $cart)
                            <p>Grabado pieza 1: <b>{{$cart->grabado}}</b> </p>
                            <p>Grabado pieza 2: <b>{{$cart->grabado2}}</b> </p>
                        @endforeach         
                    </div>            
                </div>            
            </div>        
        </div>



            @foreach ($carrito as $item)
            <form class="form-row formularioproducto" action='{{url('/detallecarro/'.$item->idcartgrabado)}}' method='POST' enctype="multipart/form-data"><br>
                {{csrf_field()}}
                                
                <div class="input-field col s12">
                    <input type="text" class="validate" value="{{$item->grabado}}" name="grabado" id="grabado" placeholder="Escriba el grabado">
                    <label for="grabado">Grabado</label>
                </div>
                
                <div class="input-field col s12">
                    <input type="text" class="validate" value="{{$item->numero}}" name="numero" id="numero" placeholder="Escriba el numero">
                    <label for="numero">Numero</label>
                </div>
                <!-- Si es mayor o igual a dos se habilita este campo -->
                <div class="input-field col s12">
                    <input type="text" class="validate" value="{{$item->grabado2}}" name="grabado2"id="grabado2" placeholder="Escriba el grabado">
                    <label for="grabado1">Grabado 2</label>
                </div>
                
                <div class="input-field col s12">
                    <input type="text" class="validate" value="{{$item->numero2}}" name="numero2" id="numero2" placeholder="Escriba el numero">
                    <label for="grabado1">Numero 2</label>
                </div>

                <div class="center"><br>
                    <button type="submit" value="editar" class="waves-effect waves-light btn-small">Guardar</button>
                </div><br>
        </form>
        @endforeach
    </div>
</div>
@endsection