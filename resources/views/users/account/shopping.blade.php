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
                    <a class="bread-info-gen-strong">Mis compras</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->


<!-- Inicia el container -->
<div class="container">
    <h4 class="font-h center">Mis compras</h4>
    <hr class="hr-color">
</div><br>

<div class="container">
   <div class="row">

    <div class="col s12 m4">
        <h3 class="header">Compra #fsdfsf1</h3>
        <div class="card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <p>Nombre: consectetur adipis lorem</p>
              <p>Kilataje: 14k</p>
              <p>Total: $1,223.00</p>
              <p>Fecha: 12/12/12</p>
              <p>Enviado: No</p>
            </div>
            <div class="card-action">
                <a class="right" href="{{route('account.detail')}}">Ver más</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col s12 m4">
        <h3 class="header">Compra #gddfssd2</h3>
        <div class="card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <p>Nombre: consectetur adipis lorem</p>
              <p>Kilataje: 14k</p>
              <p>Total: $1,223.00</p>
              <p>Fecha: 12/12/12</p>
              <p>Enviado: No</p>
            </div>
            <div class="card-action">
                <a class="right" href="{{route('account.detail')}}">Ver más</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col s12 m4">
        <h3 class="header">Compra #dfsf3</h3>
        <div class="card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              <p>Nombre: consectetur adipis lorem</p>
              <p>Kilataje: 14k</p>
              <p>Total: $1,223.00</p>
              <p>Fecha: 12/12/12</p>
              <p>Enviado: No</p>
            </div>
            <div class="card-action">
                <a class="right" href="{{route('account.detail')}}">Ver más</a>
            </div>
          </div>
        </div>
      </div>

    </div>

</div><br>
@endsection
