@extends('layouts.app')

@section('content')



<!-- Inicia carousel -->
<div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="img/1.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="img/2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="img/3.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="img/4.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="img/5.jpg"></a>
</div>
<!-- Termina carousel -->

<!-- Inicia breadcrumb indice de paginas -->
<div class="row">
    <div class="s12 m12">
        <div class="bread-top-info bread-back-padd">

            <ul>
                <li>
                    <a class="bread-info-gen-strong">Inicio /</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->

    <!-- Inicia el container -->
    <div class="container">
        <h4 class="font-h center">Promociones</h4>
        <hr class="hr-color">

        <div class="owl-carousel">
            @foreach ($productosdescuento as $prods)
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <p class="desc-padd"><a class="btn-floating btn-large pulse red right">-{{$prods->descuento}}%</a></p>
                <a href="{{ route('detalle', $prods->id_productos) }}"><img class="activator" src="{{ asset($prods->Foto)}}"></a>
                </div>
                <div>
                    <h5 class="text-center">{{$prods->producto}}</h5>
                    <p class="text-center">{{Str::limit($prods->descripcion, 26)}}</p>
                    <h6 class="text-center text-cl">Antes: <strike>${{number_format($prods->precio, 2, '.', ',')}}</strike></h6>
                    <h6 class="text-center text-cl">Ahora: ${{(100-$prods->descuento)*($prods->precio)/100}}</h6>

                </div>

                {{-- Se muestran cuando esta en pantalla completa --}}
                <div class="card-action center">
                    <div class="row">
                        <div class="col s12 m12 l12 button-card-products">
                            <a class="btn-small waves-effect waves-light modal-trigger" href="{{ route('detalle', $prods->id_productos) }}">Info</a>
                        </div>
                        <div class="col s12 m12 l12 button-card-products">
                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="id_productos" value="{{ $prods->id_productos }}">
                                <input type="hidden" name="producto" value="{{ $prods->producto }}">
                                <input type="hidden" name="precio" value="{{ $prods->precio }}">
                                <button type="submit" class="btn-small waves-effect">Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
            @endforeach
        </div>
    </div>
    {{-- destacados --}}
    <div class="container">
        <h4 class="font-h center">Destacados</h4>
        <hr class="hr-color">

        <div class="owl-carousel">
            @foreach ($productos as $prods)
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <p class="desc-padd"></p>
                <a href="{{ route('detalle', $prods->id_productos) }}"><img class="activator" src="{{ asset($prods->Foto)}}"></a>
                    {{-- <a href="details.html"><img class="activator" src="{{ asset('storage').'/'.$prods->Foto}}"></a>  --}}
                </div>
                <div class="card-content">
                    <h5 class="text-center">{{$prods->producto}}</h5>
                    <p class="text-center">{{Str::limit($prods->descripcion, 26)}}</p>
                    <h6 class="text-center text-cl">Precio:${{number_format($prods->precio, 2, '.', ',')}}</h6>
                </div>

                {{-- Se muestran cuando esta en pantalla completa --}}
                <div class="card-action center">
                    <div class="row">
                        <div class="col s12 m12 l12 button-card-products">
                            <a class="btn-small waves-effect waves-light modal-trigger" href="{{ route('detalle', $prods->id_productos) }}">Info</a>
                        </div>
                        <div class="col s12 m12 l12 button-card-products">
                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="id_productos" value="{{ $prods->id_productos }}">
                                <input type="hidden" name="producto" value="{{ $prods->producto }}">
                                <input type="hidden" name="precio" value="{{ $prods->precio }}">
                                <button type="submit" class="btn-small waves-effect">Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            @endforeach
        </div>
    </div>



<div class="container">
        <h4 class="font-h center">Accesorios para dama</h4>
        <hr class="hr-color">
        <div class="owl-carousel">

            @foreach ($damas as $dama)
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="{{route('detalle', $dama->id_productos)}}"><img class="activator img-index-size" src="{{ asset($dama->Foto)}}"></a>
                </div>
                <div class="center">
                    <h5>{{$dama->producto}}</h5>
                    <p>{{Str::limit($dama->descripcion, 26)}}</p>

                </div>
                <div class="card-action">
                    <h5 class="center">$ {{number_format($dama->precio, 2, '.', ',')}}</h5>

                    <div class="row center">
                        <div class="col s12 m12 l12 button-card-products">
                            <a class="btn-small waves-effect waves-light modal-trigger" href="#modal1">Info</a>
                        </div>
                        <div class="col s12 m12 l12 button-card-products">
                            <a class="btn-small waves-effect" href="#"n name="Mi carrito">Agregar</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <div class="container">
        <h4 class="font-h center">Accesorios para caballero</h4>
        <hr class="hr-color">
        <div class="owl-carousel">
            @foreach($caballeros as $caballero)
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="{{route('detalle', $caballero->id_productos)}}"><img class="activator img-index-size" src="{{ asset($caballero->Foto)}}"></a>
                </div>
                <div class="center">
                    <h5>{{$caballero->producto}}</h5>
                    <p>{{ Str::limit($caballero->descripcion, 26) }}</p>

                </div>
                <div class="card-action">
                    <h5 class="center">$ {{number_format($caballero->precio, 2, '.', ',')}}</h5>

                    <div class="row center">
                        <div class="col s12 m12 l12 button-card-products">
                            <a class="btn-small waves-effect waves-light modal-trigger" href="#modal1">Info</a>
                        </div>
                        <div class="col s12 m12 l12 button-card-products">
                            <a class="btn-small waves-effect" href="#"n name="Mi carrito">Agregar</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach<br>
        </div>
    </div><br>
<!-- Finaliza el container -->

@endsection
