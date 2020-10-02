<!-- Inicia Navbar -->

    <div class="navbar ">
    <nav class="white">
        <div class="nav-wrapper navbar-padd-gen">
        <a href="{{ route('index') }}" class="brand-logo sidenav-trigger black-text">
                <img class="img-menu-sidebar-darafe" src="{{asset('img/darafe.png')}}" alt="">
            </a>
            <!-- Icon responsive sidebar -->

        <a href="{{ route('index') }}" data-target="menu-responsive" class="sidenav-trigger">
                <img class="img-menu-sidebar" src="{{asset('img/gem.png')}}" alt="">
            </a>


                <ul class="hide-on-med-and-down">
                    <div class="left opt-nav-lft">
                        <li>
                        <a class="black-text" href="{{ route('index') }}">Home</a>
                        </li>
                        <li>
                            <a href="#!" class="dropdown-trigger black-text" data-target="id_rings">
                                Argollas
                                <i class="material-icons right ">arrow_drop_down</i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-trigger black-text" data-target="id_chain">
                                Cadenas
                                <i class="material-icons right ">arrow_drop_down</i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-trigger black-text" data-target="id_bracelet">
                                Pulceras
                                <i class="material-icons right ">arrow_drop_down</i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-trigger black-text" data-target="id_medal">
                                Medallas
                                <i class="material-icons right ">arrow_drop_down</i>
                            </a>
                        </li>
                        <li>
                            <a class="black-text" href="{{ route('diamantes') }}">Diamantes</a>
                        </li>

                        <li>
                            <a class="black-text" href="{{ route('gargantillas') }}">Gargantillas</a>
                        </li>

                        <li>
                        <a class="black-text" href="{{ route('anillos') }}">Anillos</a>
                        </li>

                        <li>
                            <a class="black-text" href="{{ route('caballeros') }}">Caballeros</a>
                        </li>

                        <li>
                            <a class="black-text" href="{{ route('productos') }}">Productos</a>
                        </li>
                    </div>

                    <div class="right opt-nav-rgth">



                        <li>
                            <a class="black-text modal-trigger" href="#modal_search">Buscar
                            </a>
                        </li>
                        @guest
                        <li>
                            <a
                                class="black-text"
                                href="{{ route('login') }}">Login
                            </a>
                        </li>
                        @if (Route::has('register'))
                        <li>
                            <a
                                class="black-text"
                                href="{{ route('register') }}">Registro
                            </a>
                        </li>
                        @endif @else
                        <li>
                            <a
                                class="black-text"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Salir
                            </a>

                            <form
                                id="logout-form"
                                action="{{ route('logout') }}"
                                method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>

                        <li>
                            <a class="black-text" href="{{ route('account.index') }}">&#64;{{auth()->user()->name}}</a>
                        </li>
                        @endguest

                        <li>
                            <a class="black-text" href="{{ route('cart.index') }}">Carrito

                                @if (Cart::instance('default')->count() > 0)
                                <span class="cart-count">{{ Cart::instance('default')->count() }}</span>
                                @endif

                            </a>
                        </li>

                    </div>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Termina navbar -->

    <!-- Inicia opciones dropdown navbar -->
    <ul id="id_medal" class="dropdown-content">
        <li>
            <a href="{{url('navbar/medallas', ['$medallas'=>'Religioso'])}}">Religioso</a>
        </li>
        <li>
            <a href="{{url('navbar/medallas', ['$medallas'=>'Adulto'])}}">Adulto</a>
        </li>
        <li>
            <a href="{{url('navbar/medallas', ['$medallas'=>'Niño'])}}">Niño</a>
        </li>
        <li>
            <a href="{{url('navbar/medallas', ['$medallas'=>'Niña'])}}">Niña</a>
        </li>
    </ul>

    <ul id="id_rings" class="dropdown-content">

        <li>
            <a href="{{url('navbar/argollas', ['$kilataje'=> '18k'])}}" style="font-size: 14px;">Argollas 18k</a>
        </li>
        <li>
            <a href="{{url('navbar/argollas', ['$kilataje'=> '14k'])}}" style="font-size: 14px;">Argollas 14k</a>
        </li>
        <li>
            <a href="{{url('navbar/argollas', ['$kilataje'=> '10k'])}}" style="font-size: 14px;">Argollas 10k</a>
        </li>
    </ul>

    <ul id="id_chain" class="dropdown-content">
        <li>
            <a href="{{url('navbar/cadenas', ['$cadenas' => '18k'])}}" style="font-size: 14px;">Cadenas 18k</a>
        </li>
        <li>
            <a href="{{url('navbar/cadenas', ['$cadenas' => '14k'])}}" style="font-size: 14px;">Cadenas 14k</a>
        </li>
        <li>
            <a href="{{url('navbar/cadenas', ['$cadenas' => '10k'])}}" style="font-size: 14px;">Cadenas 10k</a>
        </li>
    </ul>

    <ul id="id_bracelet" class="dropdown-content">
        <li>
            <a href="{{url('navbar/pulceras', ['$pulceras' => '18k'])}}" style="font-size: 14px;">Pulceras 18k</a>
        </li>
        <li>
            <a href="{{url('navbar/pulceras', ['$pulceras' => '14k'])}}" style="font-size: 14px;">Pulceras 14k</a>
        </li>
        <li>
            <a href="{{url('navbar/pulceras', ['$pulceras' => '10k'])}}" style="font-size: 14px;">Pulceras 10k</a>
        </li>
    </ul>
    <!-- Termina opciones dropdown navbar -->

    <!-- Inicia sidebar -->
    <ul class="sidenav" id="menu-responsive">
        <li class="head-sidebar center">
        <a href="{{ route('index') }}">
                <img src="{{asset('img/darafe.png')}}" class="font-head-sidebar" alt=""></a>
            </li>

            <center>
                <li>
                    <a class="black-text" href="{{ route('cart.index') }}">Carrito
                        @if (Cart::instance('default')->count() > 0)
                        <span class="cart-count">{{ Cart::instance('default')->count() }}</span>
                        @endif
                    </a>
                </li>
            </center>

            <li>
                <div class="divider"></div>
            </li>

            <li>
                <a href="#" class="dropdown-trigger" data-target="id_rings_second">
                    <img class="icon-sidebar-opt" src="{{asset('img/gem.png')}}" alt="">
                        Argollas
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-trigger" data-target="id_chain_second">
                        <img class="icon-sidebar-opt" src="{{asset('img/gem.png')}}" alt="">Cadenas
                            <i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-trigger" data-target="id_bracelet_second">
                            <img class="icon-sidebar-opt" src="{{asset('img/gem.png')}}" alt="">Pulceras
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-trigger" data-target="id_medal_second">
                                <img class="icon-sidebar-opt" src="{{asset('img/gem.png')}}" alt="">Medallas
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img class="icon-sidebar-opt" src="{{asset('img/gem.png')}}" alt="">Diamantes</a>
                                </li>

                                <li>
                                    <a href="#!">
                                        <img class="icon-sidebar-opt" src="{{asset('img/gem.png')}}" alt="">Gargantillas</a>
                                    </li>

                                    <li>
                                    <a href="#!">
                                            <img class="icon-sidebar-opt" src="{{asset('img/gem.png')}}" alt="">Anillos</a>
                                        </li>
                                        <li>
                                            <a href="#!">
                                                <img class="icon-sidebar-opt" src="{{asset('img/gem.png')}}" alt="">Caballeros</a>
                                            </li>
                                            <li>
                                            <a class="waves-effect waves-light btn-small" href="{{ route('contact') }}">
                                                    <i class="fas fa-life-ring"></i>Ayuda</a>
                                            </li>
                                            <li>
                                                <a href="#modal_search" class="waves-effect waves-light btn-small modal-trigger">
                                                    <i class="fas fa-search"></i>
                                                    Buscar</a>
                                            </li>
                                            <li>
                                            <a href="{{ route('cart.index') }}" class="waves-effect waves-light btn-small">
                                                    <i class="material-icons">shopping_cart</i>
                                                    Mi carrito</a>
                                            </li>

                                            @guest
                                            <li>
                                                <a class="waves-effect waves-light btn-small" href="{{ route('login') }}">
                                                    <i class="material-icons">fingerprint</i>
                                                    Login
                                                </a>
                                            </li>
                                            @if (Route::has('register'))
                                            <li>
                                                <a class="waves-effect waves-light btn-small" href="{{ route('register') }}">
                                                    <i class="material-icons">person_add</i>
                                                    Registrarse
                                                </a>
                                            </li>
                                            @endif @else
                                            <li>
                                                <a
                                                    class="waves-effect waves-light btn-small"
                                                    href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="material-icons">exit_to_app</i>
                                                    Salir
                                                </a>

                                                <form
                                                    id="logout-form"
                                                    action="{{ route('logout') }}"
                                                    method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                            @endguest

                                            <li>
                                                <a href="#!" class="waves-effect waves-light btn-small blue darken-4"><i class="fa fa-facebook-official white-text" aria-hidden="true"></i>
                                                        Facebook</a>
                                            </li>

                                            <li>
                                                    <a href="#!" class="waves-effect waves-light btn-small deep-purple darken-4"><i class="fa fa-instagram white-text" aria-hidden="true"></i>
                                                        Instragram</a>
                                            </li><br>

                                        </ul>
                                        <!-- Termina sidebar -->

                                        <!-- Inicia opciones dropdown sidebar -->
                                        <ul
                                            id="id_medal_second"
                                            class="dropdown-content grey lighten-2 size-dropdown-first">
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-gem"></i>
                                                    Religioso</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-gem"></i>
                                                    Adulto</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-gem"></i>
                                                    Niño</a>
                                            </li>
                                            <li>
                                                <a href="test1.html">
                                                    <i class="far fa-gem"></i>
                                                    Niña</a>
                                            </li>
                                        </ul>

                                        <ul
                                            id="id_rings_second"
                                            class="dropdown-content grey lighten-2 size-dropdown-first">
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-gem"></i>
                                                    Argollas 14k</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-gem"></i>
                                                    Argollas 10k</a>
                                            </li>
                                        </ul>

                                        <ul
                                            id="id_chain_second"
                                            class="dropdown-content grey lighten-2 size-dropdown-first">
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-gem"></i>
                                                    Cadenas 14k</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-gem"></i>
                                                    Cadenas 10k</a>
                                            </li>
                                        </ul>

                                        <ul
                                            id="id_bracelet_second"
                                            class="dropdown-content grey lighten-2 size-dropdown-first">
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-gem"></i>
                                                    Pulceras 14k</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="far fa-gem"></i>
                                                    Pulceras 10k</a>
                                            </li>
                                        </ul>
                                        <!-- Termina opciones dropdown sidebar -->
