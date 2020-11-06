<?php
 $saludo = "hola prueba";
 include(app_path().'/dskmercado/pruebas.php'); 
 MercadoPago\SDK::setAccessToken("ACCESS_TOKEN");
?>


<h1>{{$saludo}}</h1>
