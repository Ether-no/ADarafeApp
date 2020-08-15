
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
                    <a class="bread-info-gen-strong">Medallas</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->

<div class="container">
    <h4 class="font-h center">Medallas</h4>
    <hr class="hr-color">
</div><br>

    {{-- Medallas --}}
    <div class="container">

            <div class="row">

          @foreach ($medallas as $medalla)

                <div class="col s6 m3">

            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <p class="desc-padd"></p>
                <a href="{{ route('detalle', $medalla->id_productos) }}"><img class="activator" src="{{ asset($medalla->Foto)}}"></a>
                </div>
                <div class="card-content">
                    <h5 class="text-center">{{$medalla->producto}}</h5>
                    <p class="text-center">{{ Str::limit($medalla->descripcion,26)}}</p>
                    <h6 class="text-center text-cl">Precio:$ {{number_format($medalla->precio, 2, '.', ',')}}</h6>
                </div>

                {{-- Se muestran cuando esta en pantalla completa --}}
                <div class="card-action center">
                    <div class="row">
                        <div class="col s12 m6 button-card-products">
                            <a class="btn-small waves-effect waves-light modal-trigger" href="{{ route('detalle', $medalla->id_productos) }}">Info</a>
                        </div>
                        <div class="col s12 m5">
                            <div class="">
                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id_productos" value="{{ $medalla->id_productos }}">
                                    <input type="hidden" name="producto" value="{{ $medalla->producto }}">
                                    <input type="hidden" name="precio" value="{{ $medalla->precio }}">
                                    <button type="submit" class="waves-effect waves-light btn-small">Agregar al carrito</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                </div>
        @endforeach
                </div>
                <div>
                    {{ $medallas->links() }}
                </div>

    </div>



@endsection
