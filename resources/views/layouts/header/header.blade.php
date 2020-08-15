    <!-- Inicia Imagen principal encabezado -->
    <header id="header" class="hide-on-med-and-down">

        <div class="row ">
            <div class="col s6 m6">
                <div class="head-top-info">
                    <ul>
                        <li>
                            <i class="fas fa-phone"></i>
                                <a href="tel:+7222222222"
                                    class="tooltipped header-info-gen"
                                    data-position="right"
                                    data-tooltip="Telefonos">
                                    (722) 2222 222
                                </a>
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>
                                <a href="mailto:mail@info.com"
                                    class="tooltipped header-info-gen"
                                    data-position="right"
                                    data-tooltip="Correo Electrónico">
                                    mail@info.com
                                </a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                                <a href="#!"
                                    class="tooltipped header-info-gen"
                                    data-position="right"
                                    data-tooltip="Ubicación">
                                    Toluca México
                                </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col s6 m6">
                <p class="">
                    <ul class="social-icons social-icons-transparent">
                        <li class="social-icons-facebook  right">
                            <a href="http://www.facebook.com/"
                                class="tooltipped"
                                data-position="left"
                                data-tooltip="Facebook"
                                target="_blank"
                                name="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        </li>

                        <li class="social-icons-instagram  right">
                            <a href="http://www.instagram.com/"
                                class="tooltipped"
                                data-position="left"
                                data-tooltip="Instagram"
                                target="_blank"
                                name="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>

                        <li class="social-icons-twitter  right">
                            <a href="{{ route('contact') }}"
                                class="tooltipped"
                                data-position="left"
                                data-tooltip="Contacto">
                                <i class="fas fa-life-ring" name="Contacto"></i>
                            </a>
                        </li>

                        <li class="social-icons-darafe  right">
                                <a href="{{ route('ours') }}"
                                class="tooltipped"
                                data-position="left"
                                data-tooltip="Nosotros">
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
