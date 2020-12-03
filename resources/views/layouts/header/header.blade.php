    <!-- Inicia Imagen principal encabezado -->
    <header id="header" class="hide-on-med-and-down">

        <div class="row ">
            <div class="col s6 m6">
                <div class="head-top-info">
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i>
                                <a href="tel:+7222158046"
                                    class="tooltipped header-info-gen"
                                    data-position="right"
                                    data-tooltip="Telefonos">
                                    (722) 215 8046
                                </a>
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>
                                <a href="mailto:contacto@darafe.com"
                                    class="tooltipped header-info-gen"
                                    data-position="right"
                                    data-tooltip="Correo Electrónico">
                                    contacto@darafe.com
                                </a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                                <a href="https://g.page/centro-joyero-toluca?share"
                                    class="tooltipped header-info-gen"
                                    data-position="right"
                                    data-tooltip="Ubicación">
                                    Toluca EdoMex
                                </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col s6 m6">
                <p class="">
                    <ul class="social-icons social-icons-transparent">
                        <li class="social-icons-facebook  right">
                            <a href="https://www.facebook.com/darafejoyeria"
                                class="tooltipped"
                                data-position="left"
                                data-tooltip="Facebook"
                                target="_blank"
                                name="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        </li>

                        <li class="social-icons-instagram  right">
                            <a href="https://www.instagram.com/darafejoyas/"
                                class="tooltipped"
                                data-position="left"
                                data-tooltip="Instagram"
                                target="_blank"
                                name="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>

                        <li class="social-icons-twitter  right">
                            <a href="{{route('build')}}"
                                class="tooltipped"
                                data-position="left"
                                data-tooltip="Contacto">
                                <!-- {{ route('contact') }}  -->
                                <i class="fas fa-life-ring" name="Contacto"></i>
                            </a>
                        </li>

                        <li class="social-icons-darafe  right">
                                <a href="{{route('build')}}"
                                class="tooltipped"
                                data-position="left"
                                data-tooltip="Nosotros">
                                <!-- {{ route('ours') }}  -->
                                <i class="fas fa-users" name="Nosotros"></i>
                            </a>
                        </li>
                    </ul>
                </p>
            </div>
        </div>

        <div class="container center">
        <a href="{{ route('index') }}"><img src="{{asset('img/darafe.png')}}" alt="" class="img-res-head"></a>
        </div>
    </header>
    <!-- Termina Imagen principal encabezado -->
