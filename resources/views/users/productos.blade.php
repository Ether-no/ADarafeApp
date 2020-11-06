@extends('layouts.app')

@section('content')


{{-- Nota --}}
{{-- esta es una plantilla en general para mostrar todos los productos que correspondan
    a cada categoria --}}


<!-- Inicia breadcrumb indice de paginas -->
<div class="row">
    <div class="s12 m12">
        <div class="bread-top-info bread-back-padd">

            <ul>
                <li>
                    <a href="{{route('index')}}" class="bread-info-gen">Home /</a>
                </li>
                <li>
                    <a class="bread-info-gen-strong">Anillos</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->

<!-- Inicia contianer -->

<div class="container">
    <h4 class="font-h center">Anillos</h4>
    <hr class="hr-color">
</div><br>


<!-- Inicia container -->
<div class="container">
    <div class="row">

        <div class="col s6 m3">
            <div class="card">

                <div class="card-image waves-effect waves-block waves-light">

                    <a href="details.html"><img class="activator" src="img/argollas/AR10-800126.png"></a>
                </div>

                <div class="card-content">
                    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <h6 class="text-center text-cl">Precio: $ 0</h6>
                </div>

                <div class="card-action">
                    <a class="btn-floating btn-small waves-effect waves-light red right" href="#"><i class="fas fa-cart-plus"></i></a>
                    <a class="btn-floating btn-small waves-effect waves-light modal-trigger grey darken-2" href="#modal1"><i class="fas fa-info"></i></a>
                </div>

            </div>
        </div>
    </div><br>
    <ul class="pagination center">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul><br>
</div>

<!-- Finaliza container -->

@endsection
