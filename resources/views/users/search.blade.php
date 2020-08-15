@extends('layouts.app')

@section('content')

<!-- Inicia breadcrumb indice de paginas -->
<div class="row">
    <div class="s12 m12">
        <div class="bread-top-info bread-back-padd">

            <ul>
                <li>
                    <a href="#" class="bread-info-gen">home /</a>
                </li>
                <li>
                    <a class="bread-info-gen-strong">Mi búsqueda</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->

<!-- Inicia container -->
<div class="container">
<h4 class="font-h">
Mi búsqueda: {{$search}}
 </h4>
<hr class="hr-color">

<table>
    <thead>
   
        <tr>
         
          <th class="size-my-search-table">Imagen</th>
          <th class="size-my-search-table">Código</th>
          <th class="size-my-search-table">Nombre</th>
          <th class="size-my-search-table">Precio</th>
          <th class="size-my-search-table"></th>
      </tr>
    </thead>

    <tbody>
      
        @foreach ($producto as $prodc) 
            <tr>
                <td><img class="img-my-search" src="{{ asset($prodc->Foto)}}" alt=""></td>
                <td>{{$prodc->RFC}}</td>
                <td>{{$prodc->producto}}</td>
                <td>${{$prodc->precio}}</td>
                <td>                            
                    <a href="{{ route('detalle', $prodc->id_productos) }}" class="waves-effect waves-light btn-small"><h7>¡Ver más!</h7></a>
                </td>
            </tr>
        @endforeach
        
    </tbody>
  </table>

</div><br><br>

<!-- Termina container -->

@endsection