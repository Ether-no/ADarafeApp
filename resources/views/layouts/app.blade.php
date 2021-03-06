<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">

        {{-- <link rel="stylesheet" type="text/css" href="{{asset('materialize/css/materialize.css') }}"> --}}
        <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/helpers.css') }}">
        <script src="https://js.stripe.com/v3/"></script>
        <link rel="stylesheet" href="{{asset('carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{asset('carousel/assets/owl.theme.default.css') }}">
        <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
        <script src="{{ asset('js/carrito.js') }}"></script>
        <script src="https://kit.fontawesome.com/f7e5c22dfe.js" crossorigin="anonymous"></script>
        
        <style>
            .owl-carousel .owl-nav button.owl-prev {
                color: rgb(0, 0, 0);
                border: none;
                padding: 0 !important;
                font: inherit;
                font-size: 30px;
                position: absolute;
                top: 50%;
                width: 30px;
                height: 30px;
            }

            .owl-carousel .owl-nav button.owl-next {
                color: rgb(0, 0, 0);
                border: none;
                padding: 0 !important;
                font: inherit;
                font-size: 30px;
                position: absolute;
                top: 50%;
                right: 0;
                width: 30px;
                height: 30px;
            }

            .cart-count {
                border-radius: 100%;
                padding-left: 2mm;
                padding-right: 2mm;
                padding-top: 0.8mm;
                padding-bottom: 0.8mm;
                background-color: yellow;
                font-weight: bold;
                color: black;
            }
        </style>
        <title>Darafe|Store</title>
    </head>

    <body>
        <!-- Inicia link UP -->
        <a name="up"></a>
        <!-- finaliza link up -->
        <div>
            @include('layouts.alert')
        </div>

        <div>
            @include('layouts.header.header')
        </div>

        <div>
            @include('layouts.navbar.navbar')
        </div>

        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer.footer')
        </div>

        <div>
            @include('layouts.modal.modal_search')
        </div>

        <!-- Inicia link up -->
        <div class="fixed-action-btn hide-on-med-and-down">
            <a class="waves-effect waves-light btn-floating btn-large red" href="#up">
                <i class="large material-icons">expand_less</i>
            </a>
        </div>
        <!-- finaliza link up -->

        <!-- Inician Scripts -->
        <div>
            @yield('cartUpdate')
        </div>
        <script
            src="{{asset('https://code.jquery.com/jquery-3.3.1.min.js') }}"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js') }}"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="{{asset('carousel/jquery.min.js') }}"></script>
        <script src="{{asset('carousel/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('js/materialize.js') }}"></script>
        <script src="{{asset('js/darafe.js') }}"></script>
        <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
        <script>
            window.Mercadopago.setPublishableKey('{{ config('services.mercadopago.key') }}');
            function setCardNetwork()
            {
                var cardNumber = document.getElementById("cardNumber");
                window.Mercadopago.getPaymentMethod(
                    { "bin": cardNumber.value.substring(0,6) },
                    function(status, response) {
                        var cardNetwork = document.getElementById("cardNetwork");
                        cardNetwork.value = response[0].id;
                       
                    }
                );
            }
            
        </script>
     
        <script>
            function validardatosmercado(){
                tokencard();  
            }
            //4075595716483764
            // var mercadoPagoForm = document.getElementById("paymentForm");
            // mercadoPagoForm.addEventListener('submit', function(e){
            //     e.preventDefault();
            //     var tipopay = document.getElementById("payment_platform");
            //     if (tipopay = 3) {
            //         tokencard();
            //         setCardNetwork();
                    
            //     }
            // });
            // function tokencard(){
            // window.Mercadopago.createToken(mercadoPagoForm, function(status, response) {
            //         if (status != 200 && status != 201) {
            //             var errors = document.getElementById("paymentErrors");
            //             errors.textContent = response.cause[0].description;
        
            //         } else {
        
            //             var cardToken = document.getElementById("cardToken");
            //             cardToken.value = response.id;  
            //         }
            //     });
            // }
    //     function validateForm(){
    //     var mercadoPagoForm = document.getElementById("paymentForm");
    //     if(mercadoPagoForm.value === 3){
    //         mercadoPago.createToken(mercadoPagoForm, function(status, response) {
    //             if (status != 200 && status != 201) {
    //                 var errors = document.getElementById("paymentErrors");
    //                 errors.textContent = response.cause[0].description;
    //             } else {
    //                 var cardToken = document.getElementById("cardToken");

    //                 setCardNetwork();
    //                 tokencard();
    //                 cardToken.value = response.id;
    //                 if(cardToken.value != ""){
    //                     alert("sigue vacio");
    //                     console.log("entro");
    //                     return false;
    //                 }else{
    //                     return true;
    //                 }
    //             }
    //         });
    //     }
    // }
    function tokencard(){
        document.getElementById("loading").style.display = "block";
        setTimeout('tempvalidador()',5000);
        var mercadoPagoForm = document.getElementById("paymentForm");
        window.Mercadopago.createToken(mercadoPagoForm, function(status, response) {
            if (status != 200 && status != 201) {
                var errors = document.getElementById("paymentErrors");
                errors.textContent = response.cause[0].description;
            } else {
                var cardToken = document.getElementById("cardToken");
                cardToken.value = response.id; 
                
            }
        });
    }
    function tempvalidador(){
        document.getElementById("loading").style.display = "none";
    }
        </script>
        <!-- Finalizan Scripts -->
    </body>
</html>