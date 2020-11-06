<nav class="grey darken-2">
  <div class="container_dash">


  <div class="nav-wrapper">
    <a href="{{ route('panel') }}" class="brand-logo">Darafe | Admin</a>
    <ul class="right hide-on-med-and-down">
      <li>@User_Apat |</li>
        <li><a href="{{ url('/productos/create') }}">Productos</a></li>
        <li><a href="{{ route('users_panel') }}">Usuarios</a></li>
        <li><a href="{{ route('envio_panel') }}">Envíos</a></li>
        <li><a href="{{ route('inventario_panel') }}">Inventario</a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Option 2<i class="material-icons right">arrow_drop_down</i></a></li>
        <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

            <i class="fa fa-power-off" aria-hidden="true"></i>&nbsp Salir
        </a>
            <form
                id="logout-form"
                action="{{ route('logout') }}"
                method="POST"
                style="display: none;">
                @csrf
            </form>
        </li>

    </ul>
  </div>
  </div>
</nav>


<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Option 1</a></li>
  <li><a href="#!">Option 2</a></li>
  <li class="divider"></li>
  <li><a href="#!">Option 3</a></li>
</ul>
