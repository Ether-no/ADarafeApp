@extends('layouts.app')

@section('content')

<!-- Inicia breadcrumb indice de paginas -->
<div class="row">
    <div class="s12 m12">
        <div class="bread-top-info bread-back-padd">

            <ul>
                <li>
                    <a href="{{route('index')}}" class="bread-info-gen">Home /</a>
                </li>
                <li>
                    <a href="{{ route('cart.index')}}"class="bread-info-gen">Mi carrito / </a>
                </li>
                <li>
                    <a class="bread-info-gen-strong">Realizar pago</a>
                </li>
            </ul>

        </div>
    </div>
</div><br>
<!-- Finaliza breadcrumb indice de paginas -->


<!-- Inicia el container -->
<div class="container">
    <h4 class="font-h center">Realizar pago</h4>
    <hr class="hr-color">
</div><br>

{{-- <div class="container">
    <h5 class="font-h">Detalles de envío</h5>
   <div class="row">
        <div class="col s12 m7">
            <form action="">

                <div class="form-group">
                    @if (auth()->user())
                        <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                        <label for="email">Correo electrónico</label>

                        <div class="input-field">
                            <input id="nombre" type="text" class="validate" value="{{auth()->user()->name}}">
                            <label for="nombre">Nombre</label>
                        </div>

                        <div class="input-field">
                            <input id="apellidos" type="text" class="validate" value="{{auth()->user()->apellidos}}">
                            <label for="apellidos">Apellidos</label>
                        </div>

                        <div class="input-field">
                            <input id="calle" type="text" class="validate" value="{{auth()->user()->calle}}">
                            <label for="calle">Calle</label>
                        </div>

                        <div class="input-field">
                            <input id="colonia" type="text" class="validate" value="{{auth()->user()->colonia}}">
                            <label for="colonia">Colonia</label>
                        </div>

                        <div class="input-field">
                            <input id="municipio" type="text" class="validate" value="{{auth()->user()->municipio}}">
                            <label for="municipio">Municipio</label>
                        </div>

                        <div class="input-field">
                            <input id="ciudad" type="text" class="validate" value="{{auth()->user()->ciudad}}">
                            <label for="ciudad">Ciudad</label>
                        </div>

                        <div class="input-field">
                            <input id="estado" type="text" class="validate" value="{{auth()->user()->estado}}">
                            <label for="estado">Estado</label>
                        </div>

                        <div class="input-field">
                            <input id="cp" type="text" class="validate" value="{{auth()->user()->cp}}">
                            <label for="cp">C.P.</label>
                        </div>

                        <div class="input-field">
                            <input id="telefono" type="text" class="validate" value="{{auth()->user()->telefono}}">
                            <label for="telefono">Teléfono</label>
                        </div><br>

                    @else
                        <div class="input-field">
                            <input type="email" class="validate" id="email" name="email" value="{{ old('email') }}" required>
                            <label for="email">Correo electrónico</label>
                        </div>

                        <div class="input-field">
                            <input id="nombre" type="text" class="validate">
                            <label for="nombre">Nombre</label>
                        </div>

                        <div class="input-field">
                            <input id="apellidos" type="text" class="validate">
                            <label for="apellidos">Apellidos</label>
                        </div>

                        <div class="input-field">
                            <input id="calle" type="text" class="validate">
                            <label for="calle">Calle</label>
                        </div>

                        <div class="input-field">
                            <input id="colonia" type="text" class="validate">
                            <label for="colonia">Colonia</label>
                        </div>

                        <div class="input-field">
                            <input id="municipio" type="text" class="validate">
                            <label for="municipio">Municipio</label>
                        </div>

                        <div class="input-field">
                            <input id="ciudad" type="text" class="validate">
                            <label for="ciudad">Ciudad</label>
                        </div>

                        <div class="input-field">
                            <input id="estado" type="text" class="validate">
                            <label for="estado">Estado</label>
                        </div>

                        <div class="input-field">
                            <input id="cp" type="text" class="validate">
                            <label for="cp">C.P.</label>
                        </div>

                        <div class="input-field">
                            <input id="telefono" type="text" class="validate">
                            <label for="telefono">Teléfono</label>
                        </div><br>
                    @endif
                </div>


                <h5 class="font-h">Detalles del pago</h5><br>

                <div class="input-field">
                    <input id="name_card" type="text" class="validate">
                    <label for="name_card">Nombre del titular</label>
                </div>

                <div class="input-field" id="card-element">
                    <input id="number_card" type="text" class="validate">
                    <label for="number_card">Número de tarjeta</label>
                </div>

                {{-- <div class="">
                    <input id="date" type="date">
                    <label for="date">Fecha expiración</label>
                </div> --}}

                {{-- <div class="form-row">
                    <label for="card-element">
                      Credit or debit card
                    </label>
                    <div id="card-element"></div>
                
                    <!-- Used to display Element errors. -->
                    <div id="card-errors" role="alert"></div>
                </div> --}}
                {{-- <div class="input-field">
                    <input id="ccp" type="text" class="validate">
                    <label for="ccp">CCP</label>
                </div> --}}


                {{-- @if (auth()->user())
                <div class="row">
                    <a class="waves-effect waves-light btn-small right col m12 m9" href="{{ route('account.address', ['id' => auth()->user()->id]) }}">Modificar mi dirección</a>
                </div><br>
                @endif

                <div class="row">
                    <button class="waves-effect waves-light btn-small right col m12 m9">Confirmar compra</button>
                </div><br>
            </form>

            <form action="{{url('/prueba')}}">
                <div class="row">
                    <button class="waves-effect waves-light btn-small right col m12 m9">Pagar con mercado pago</button>
                </div>
            </form>

        </div> --}}
        {{-- <form action="{{url('/pagar')}}" method="post" id="payment-form" style="width: 50%;">
            <div class="form-row">
              <label for="card-element">
                Credit or debit card
              </label>
              <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
              </div>
          
              <!-- Used to display Element errors. -->
              <div id="card-errors" role="alert"></div>
            </div>
          
            <button>Submit Payment</button>
        </form> --}}

        {{-- <div class="col s12 m4 right">
            <h4 class="font-h">Total a pagar test</h4>
            <div class="card grey lighten-5">
                <div class="card-content"><br>

                    @foreach (Cart::content() as $item)
                    <div class="row">
                        <div class="col s12 m4"><a href="{{ route('detalle', $item->model->id_productos) }}"><img class="responsive-img" src="{{ asset($item->model->Foto)}}" alt=""></a></div>
                        <div class="col s12 m4">
                            <p>{{ $item->model->producto }}</p>
                            <p>$ {{ $item->model->precio }}</p>
                        </div>
                        <div class="col s12 m2">{{ $item->qty }}</div>
                    </div>
                    @endforeach
                    <hr class="hr-color"><br>

                    <ul class="collection">
                        <li class="collection-item">Subtotal: <b>$ {{ Cart::subtotal() }}</b></li>
                        <li class="collection-item">IVA (16%): <b>$ {{ Cart::tax() }}</b></li>
                        <li class="collection-item">Envio: <b>Gratis</b></li>
                        <li class="collection-item"><h6>Total: <b>$ {{ Cart::total() }}</b></h6></li>
                    </ul><br>
                </div>
            </div>
        </div>
    </div>

</div><br>  --}}

{{-- <div class="container">
    <div class="card-body">
        <form action="#" method="POST" id="paymentForm">
            @csrf
            <h5 class="font-h">Detalles del pago</h5><br>

            <div class="input-field">
                <input id="name_card" type="text" class="validate">
                <label for="name_card">Nombre del titular</label>
            </div>

            <div class="input-field" id="card-element">
                <input id="number_card" type="text" class="validate">
                <label for="number_card">Número de tarjeta</label>
            </div>
            <div class="row mt-3">
                <label>Seleciones la forma de pago</label>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    @foreach ($payment as $tipospago)
                        <label class="btn btn-outline-secundary rounded m-2 p-1">
                            <input 
                            type="radio"
                            name="payment_platform"
                            value="{{ $tipospago->id }}"
                            required
                            >
                            <img class="img-thumbnail" src="{{asset($tipospago->image)}}">
                        </label>
                    @endforeach
                </div>
            </div>
        </form>
    </div>
</div> --}}

<div id="loading"></div>


<!-- ************************************************************************************************* -->
<!-- Inicia metodos de pago -->
<!-- ************************* -->
<!-- ************Abre el Row************* -->
<div class="row">
<div class="col s12 m6">
<!-- ************************* -->

<div class="container">
<h4 class="font-h center">¡Seleccione su forma de pago!</h4>
    <div class="">
        <div class="">
            <div class="card">
                <div class="card-body">
                <form action="{{route('pay')}}" method="POST" id="paymentForm">
                        @csrf

                        <div class="" style="display: none">
                            <div class="">
                                <label>¿Cuanto se va a pagar?</label>
                                @foreach($cartotal as $total)
                                <input
                                    type="number"
                                    class=""
                                    name="value"
                                  value="{{$total->Total}}" required>
                                  @endforeach
                                <small class="form-text text-muted">
                                   Elija el tipo de moneda con el que desea pagar
                                </small>
                            </div>
                            <div class="col-auto">
                                <label>Moneda</label>
                                <select class="custom-select" name="currency" required>
                                    @foreach ($currencies as $currency)
                                        <option value="{{ $currency->iso }}">
                                            {{ strtoupper($currency->iso) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div><br>
                        <div class="center">
                            <div class=" container">
                                <div class="form-group" id="toggler">
                                    <div class="" data-toggle="">
                                        @foreach ($payment as $paymentPlatform)
                                        
                                            <label
                                                class="center"
                                                onclick="tipodepago('{{ $paymentPlatform->name }}')">
                                                <input
                                                    type="radio"
                                                    name="payment_platform"
                                                    value="{{ $paymentPlatform->id }}"
                                                    required
                                                >
                                                <img class="img-thumbnail" src="{{ asset($paymentPlatform->image) }}">
                                            </label>
                                        @endforeach
                                    </div>
                                    <div id="strippe">
                                        <input id="cardholder-name" type="text" value="{{ auth()->user()->name }} {{ auth()->user()->apellidos }}">
                                        <input id="cardholder-email" type="text" value="{{ auth()->user()->email }}">
                                        <div id="card-element"></div>
                                        <small class="form-text text-muted" id="card-result" role="alert"></small>
                                        <input type="text" name="payment_method" id="paymentMethod">                                       
                                    </div>


                                    <div id="paypal" >
                                        <h3>Se direcionara a paypal</h3>
                                    </div>


                                    <div id="mercadopago"><br>
                                        <div class="input-field">
                                            <input class="validate" type="text" id="cardNumber" data-checkout="cardNumber" onchange="setCardNetwork();">
                                            <label for="cardNumber">Número de tarjeta</label>
                                        </div>

                                        <div class="input-field">
                                            <input class="validate" type="text" data-checkout="securityCode">
                                            <label for="securityCode">Código de Seguridad "CVC"</label>
                                        </div>
                                                                        
                                        <div class="input-field">
                                            <input class="validate" type="text" data-checkout="cardExpirationMonth">
                                            <label for="cardExpirationMonth">Mes de expiración "MM"</label>
                                        </div>
                                    
                                        <div class="input-field">
                                            <input class="validate" type="text" data-checkout="cardExpirationYear">
                                            <label for="cardExpirationYear">Año de expiración "YY"</label>
                                        </div>

                                        <div class="input-field">
                                            <input class="validate" type="text" data-checkout="cardholderName">
                                            <label for="cardholderName">Nombre</label>
                                        </div>
                                        
                                        <div class="input-field">
                                            <input class="Validate" type="email" data-checkout="cardholderEmail" name="email">
                                            <label for="cardHolderEmail">Email</label>                    
                                        </div>

                                        <div class="form-group form-row">
                                            <div class="col">
                                                <small class="form-text text-mute"  role="alert" >Tu pago sera convertido a {{ strtoupper(config('services.mercadopago.base_currency')) }}</small>
                                            </div>
                                        </div> <br>
                                        <div class="form-group form-row">
                                            <div class="col">
                                                <small class="form-text text-danger" id="paymentErrors" role="alert"></small>
                                            </div>
                                        </div>
                                        <input type="hidden" id="cardNetwork" name="card_network">
                                        <input type="hidden" id="cardToken" name="card_token">
                                        <button type="button" class="btn btn-primary btn-lg" onclick="validardatosmercado()" >Validar datos</button>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                        <div class="text-center mt-3">
                            <button type="submit" id="payButton" class="btn btn-primary btn-lg" >Pagar</button>
                        </div><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ************************* -->
</div>
<!-- ************************* -->

<div id="loading"></div>



<!-- Inicia detalle de pago -->
<!-- ************************* -->
<div class="col s12 m6">
<!-- ************************* -->
<div class="container">
    <h4 class="font-h center">Total a pagar</h4>
    <div class="card grey lighten-5">
        <div class="card-content"><br>

            @foreach (Cart::content() as $item)
            <div class="row">
                <div class="col s12 m4"><a href="{{ route('detalle', $item->model->id_productos) }}"><img class="responsive-img" src="{{ asset($item->model->Foto)}}" alt=""></a></div>
                <div class="col s12 m4">
                    <p>{{ $item->model->producto }}</p>
                    <p>$ {{ $item->model->precio }}</p>
                </div>
                <div class="col s12 m2">{{ $item->qty }}</div>
            </div>
            @endforeach
            <hr class="hr-color"><br>

            <ul class="collection">
                <li class="collection-item">Subtotal: <b>$ {{ Cart::subtotal() }}</b></li>
                <li class="collection-item">IVA (16%): <b>$ {{ Cart::tax() }}</b></li>
                <li class="collection-item">Envio: <b>Gratis</b></li>
                <li class="collection-item"><h6>Total: <b>$ {{ Cart::total() }}</b></h6></li>
            </ul><br>
        </div>
    </div>
</div>

<!-- ************************* -->
</div>
<!-- *************Cierra el Row************ -->
</div>
<!-- ************************* -->

<!-- ************************************************************************************************* -->

<!-- Inicia productos destacados -->

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
                <p class="text-center">{{Str::limit($destacado->descripcion,26)}}</p>
                <h6 class="text-center text-cl">Precio:${{$destacado->precio}}</h6>
            </div>

            {{-- Se muestran cuando esta en pantalla completa --}}
            <div class="card-action center">
                <div class="row">
                    <div class="col s12 m6 button-card-products">
                        <a class="btn-small waves-effect waves-light modal-trigger" href="#modal1">Info</a>
                    </div>
                    <div class="col s12 m6 button-card-products">
                        <a class="btn-small waves-effect" href="#"n name="Mi carrito">Agregar</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div><br>
@push('scripts')
<script>
    
    
    // mercadoPagoForm.addEventListener('submit', function(e) {
    //     if (mercadoPagoForm.elements.payment_platform.value === 3) {
    //         e.preventDefault();

    //         mercadoPago.createToken(mercadoPagoForm, function(status, response) {
    //             if (status != 200 && status != 201) {
    //                 var errors = document.getElementById("paymentErrors");

    //                 errors.textContent = response.cause[0].description;
    //             } else {
    //                 var cardToken = document.getElementById("cardToken");

    //                 setCardNetwork();

    //                 cardToken.value = response.id;

    //                 mercadoPagoForm.submit();
    //             }
    //         });
    //     }
    // });
</script>
@endpush
@endsection
