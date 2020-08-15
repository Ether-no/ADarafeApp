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
                    <a href="#" class="bread-info-gen">Mis compras /</a>
                </li>
                <li>
                    <a class="bread-info-gen-strong">Detalle compra</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->


<!-- Inicia el container -->
<div class="container">
    <h4 class="font-h center">Detalle de la compra</h4>
    <hr class="hr-color">
</div><br>

<div class="container">
   <div class="row">

    <div class="col s12 m12">
        <h4 class="header">Producto 1</h4>
        <div class="card horizontal">
        <div class="card-image img-shop-image">
        <img src="{{asset('img/argollas/A14-B100024.png')}}">
        </div>
        <div class="card-stacked">
            <div class="card-content">
            <p>Nombre: I am a very simple card. I am good at containing small bits of information.</p>
            <p>Cantidad: 3</p>
            <p>Costo: $1,233.00</p>
            <p>Dirección de envío: address example</p>
            <p>Ciudad: City example</p>
            <p>Enviado: No</p>
            </div>
        </div>
        </div>
    </div>

    <div class="col s12 m12">
        <h4 class="header">Producto 2</h4>
        <div class="card horizontal">
        <div class="card-image img-shop-image">
        <img src="{{asset('img/argollas/A14-B100024.png')}}">
        </div>
        <div class="card-stacked">
            <div class="card-content">
            <p>Nombre: I am a very simple card. I am good at containing small bits of information.</p>
            <p>Cantidad: 3</p>
            <p>Costo: $1,233.00</p>
            <p>Dirección de envío: address example</p>
            <p>Ciudad: City example</p>
            <p>Enviado: No</p>
            </div>
        </div>
        </div>
    </div>

    <div class="col s12 m12">
        <h4 class="header">Producto 3</h4>
        <div class="card horizontal">
        <div class="card-image img-shop-image">
        <img src="{{asset('img/argollas/A14-B100024.png')}}">
        </div>
        <div class="card-stacked">
            <div class="card-content">
            <p>Nombre: I am a very simple card. I am good at containing small bits of information.</p>
            <p>Cantidad: 3</p>
            <p>Costo: $1,233.00</p>
            <p>Dirección de envío: address example</p>
            <p>Ciudad: City example</p>
            <p>Enviado: No</p>
            </div>
        </div>
        </div>
    </div>

    </div>

</div><br>
@endsection
