<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- <link rel="stylesheet" type="text/css" href="{{asset('materialize/css/materialize.css') }}">
    --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/helpers.css') }}">
    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    <script src="https://kit.fontawesome.com/f7e5c22dfe.js" crossorigin="anonymous"></script>
    <script src="https://cib.banorte.com/orquestador/resources/js/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="https://cib.banorte.com/orquestador/lightbox/checkout.js" type="text/javascript"></script>
    <title>Darafe | @yield('title')</title>
</head>

<body>

    @include('layouts.alert')

    {{-- Init Content --}}
    @include('layouts.sidebar.sidebar')

    @yield('content')

    @include('layouts.footer.footer_dash')
    {{-- End Content --}}

    <!-- Inician Scripts -->
    <script
    src="{{asset('https://code.jquery.com/jquery-3.3.1.min.js') }}"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script src="{{ asset('js/darafe.js') }}"></script>
    <script src="{{ asset('js/productos.js') }}"></script>
    <script src="{{ asset('js/carproducto.js') }}"></script>
    <!-- Finalizan Scripts -->
</body>

</html>
