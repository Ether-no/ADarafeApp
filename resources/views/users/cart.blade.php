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
                    <a class="bread-info-gen-strong">Mi carrito</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->
@php
$suma = 0;
@endphp

<!-- Inicia el container -->
<div class="container">
    <h4 class="font-h center">Mi carrito</h4>
    <hr class="hr-color">
</div><br>

<div class="container">
    <div class="row">
        <div class="col s12 m6">
            <!-- Activar cuando el carrito este operativo al 100% -->
            <!-- <h5>{{ Cart::count() }} Producto(s) agregado(s)</h5> -->
        </div>
        <div class="col s12 m6">
            <a href="{{ route('index') }}" class="waves-effect waves-light btn-small right">¡Continuar comprando!</a>
        </div>
    </div><br><br>

    <div class="row">
        <div class="col s12 m9">
            <table>
                <thead>
                    <div>
                        <tr>
                            <th class="center">Producto</th>
                            <th class="center">Descripción</th>
                            <th class="center">Cantidad & Acciones</th>
                            <th class="center">Total</th>
                        </tr>                    
                    </div>

                </thead>
                <tbody>

                    @foreach ($idcarrito as $item)
                    <tr>


                            <td class="margin-cart center"><a href="{{ route('detalle', $item->id_productos) }}">
                                <img class="responsive-img" width="50%" height="50%" src="{{ asset($item->foto)}}" alt=""></a>
                            </td>       


                            <td class="margin-cart center">
                                 <p>{{Str::limit($item->descripcion, 20)}}</p>
                            </td>                 



                            <td class="margin-cart center">

                                <div class="row">
                                    <div class=" s12 m12 l12">
                                        <div class="input-field">
                                            <select class="quantity" data-id="{{ $item->idcar }}">
                                                @for ($i = 1; $i < 5 ; $i++)
                                                    <option {{ $item->cantidad == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>                                
                                    </div>
                                    <div class=" s12 m12 l12">
                                        <div class="left">
                                            <form action="{{ route('cart.destroy', $item->id_productos) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="waves-effect waves-light btn-small red right">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>                                
                                        </div>                                    
                                    </div>
                                    <div class="s12 m12 l12">
                                        <div class="right">
                                        @if ($item->grabado)
                                            {{-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1" onclick="grab({{ $item->idcar }})">Modal</a>    --}}
                                            <form action="{{ route('registra.guardarGN', $item->idcar) }}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="submit" class="waves-effect waves-light btn modal-trigger">
                                                    Grabar
                                                </button>
                                            </form> 
                                        @endif                            
                                        </div>                                    
                                    </div>
                                </div>
                            </td>

                             <td class="margin-cart center">$ {{ number_format($item->total, 2,'.', ',') }}</td>  
                             
                    </div>



                        </tr>
                    @endforeach
                </tbody>
        </div>
        </table>
    </div>
    <!-- Modal Trigger -->
  

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    
  </div>
          
    <div class="row">
        <div class="col s12 m3">
            <h4 class="font-h">Total a pagar</h4>
            <div class="card grey lighten-5">
                <div class="card-content">
                    <p>Subtotal: <b>${{ Cart::subtotal() }}</b></p>
                    <hr class="hr-color">
                    <p>IVA (16%): <b>${{ Cart::tax() }}</b></p>
                    <hr class="hr-color">
                    <p>Envio: <b>Gratis</b></p>
                    <hr class="hr-color"><br>
                    <h6>Total: <b>$ @foreach ($cart as $total){{$total->Total}}@endforeach
                    </b></h6><br>
                    @if (auth()->user())
                    <a href="{{ route('checkout.index', ['id' => auth()->user()->id]) }}"class="waves-effect waves-light btn-small right col s12 m12">Checkout</a><br><br>
                    @else
                    <a href="{{ route('checkout_guess.index') }}"class="waves-effect waves-light btn-small right col s12 m12">Checkout</a><br><br>
                    @endif
                </div>
            </div>
        </div>
    </div>

<!-- Activar cuando el carrito de compras este operativo al 100% -->
<!--     <div class="container">
        <h5>¡No hay productos en el carrito!</h5>
        <center><br><br>
            <a href="{{ route('index') }}" class="waves-effect waves-light btn-large col s12 m12">¡Continuar comprando!</a>
        </center><br><br>
    </div> -->


</div>



</div><br>

<div class="container">
    <h4 class="font-h center">Productos destacados</h4>
    <hr class="hr-color">


    <div class="owl-carousel">

        @foreach ($destacados as $destacado)
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <p class="desc-padd"></p>
            <a href="{{ route('detalle', $destacado->id_productos) }}"><img class="activator" src="{{ asset($destacado->Foto)}}"></a>
                {{-- <a href="details.html"><img class="activator" src="{{ asset('storage').'/'.$destacado->Foto}}"></a>  --}}
            </div>
            <div class="card-content">
                <h5 class="text-center">{{$destacado->producto}}</h5>
                <p class="text-center">{{Str::limit($destacado->descripcion, 26)}}</p>
                <h6 class="text-center text-cl">Precio:${{$destacado->precio}}</h6>
            </div>

            {{-- Se muestran cuando esta en pantalla completa --}}
            <div class="card-action center">
                <div class="row">
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
</div><br>

<!-- Finaliza el container -->

@endsection

@section('cartUpdate')
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        (function(){
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element){
                element.addEventListener('change', function(){
                    const id = element.getAttribute('data-id')
                    axios.patch(`/cart/${id}`, {
                        quantity: this.value
                    })
                    .then(function (response) {
                        /* console.log(response); */
                        window.location.href ='{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        console.log(error);
                        window.location.href ='{{ route('cart.index') }}'
                    });
                })
            })
        })();
    </script>
@endsection
