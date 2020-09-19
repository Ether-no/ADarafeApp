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
                    <a class="bread-info-gen-strong">Detalles del producto</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->


<!-- Inicia container -->
<div class="container">
    <h4 class="font-h center">Detalles del producto</h4>
    <hr class="hr-color">
</div><br>

<div class="container">


    <div class="row">
        <div class="col s12 m6">
            <img class="responsive-img" src="{{asset($detalles->Foto)}}" alt="">

            <div class="row">
                {{-- Falta arreglar dettalles fotos --}}
                <div class="col s3"><img class="responsive-img z-depth-1" src="{{asset($detalles->fotovista1)}}" alt=""></div>
                <div class="col s3"><img class="responsive-img z-depth-1" src="{{asset($detalles->fotovista2)}}" alt=""></div>
                <div class="col s3"><img class="responsive-img z-depth-1" src="{{asset($detalles->Foto)}}" alt=""></div>
            </div>
        </div>



        <div class="col s12 m6">
            <h4 class="font-h">{{$detalles->producto}}</h4>

            @if($detalles->descuento === 0)
                <h6 class="details-italic">Precio: $ {{number_format($detalles->precio, 2, '.', ',')}}</h6><br>
            @else
                <h6 class="details-italic">Antes: <strike>${{number_format($detalles->precio, 2, '.', ',')}}</strike></h6>
                <h6 class="details-italic">Ahora: ${{(100-$detalles->descuento)*($detalles->precio)/100}}</h6><br>
            @endif
            <div class="row">
                <div class="col s12 m3">
                    <a class="waves-effect waves-light btn-small">Comprar ahora</a>
                </div>

                <div class="col s12 m5">
                    <div class="">
                        <form action="{{ route('cart.store') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="id_productos" value="{{ $detalles->id_productos }}">
                            <input type="hidden" name="producto" value="{{ $detalles->producto }}">
                            <input type="hidden" name="precio" value="{{ $detalles->precio }}">
                            <button type="submit" class="waves-effect waves-light btn-small">Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>


            <hr class="hr-color desc-padd-margin">
            <p>{{$detalles->descripcion}}
            </p>
            <hr class="hr-color desc-padd-margin">
            <h5>Características generales</h5>

            <table>
                <tbody>
                    <tr>
                        <td>Material: </td>
                        <td>{{$detalles->material}}</td>
                    </tr>
                    <tr>
                        <td>Kilataje:</td>
                        <td>{{$detalles->kilataje}}</td>
                    </tr>
                    <tr>
                        <td>RFC:</td>
                        <td>{{$detalles->RFC}}</td>
                    </tr>
                    <tr>
                        <td>Categoría</td>
                        <td><a href="#"><span class="new badge"data-badge-caption="{{$detalles->id_cat}}"></span></a></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div><br>

<div class="container">
    <h4 class="font-h center">Productos destacados</h4>
    <hr class="hr-color">


    <div class="owl-carousel">
        @foreach ($destacados as $destacado)
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="{{route('detalle', $destacado->id_productos)}}"><img class="img-index-size" src="{{asset($destacado->Foto)}}" alt=""></a>
            </div>
            <div class="center">
                <h5>{{$destacado->producto}}</h5>
                <p>{{Str::limit($destacado->descripcion, 26)}}</p>

            </div>
            <div class="card-action">
                <h5 class="center">$ {{number_format($destacado->precio, 2, '.',',')}}</h5>
            </div>
        </div>
        @endforeach
    </div>
</div><br>
<!-- Finaliza container -->

@endsection
