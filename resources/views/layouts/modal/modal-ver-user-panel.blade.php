<!-- Modal Structure -->
<div id="modal_ver_us-panel{{ $user->id }}" class="modal">
    <div class="modal-content">
    <h5 class="text-modal-hlp">Usuario: &#64;{{ $user->name }} {{ $user->apellidos }}</h5>

          <div class="row">
              <div class="col s6 m5 right-align text-modal-hlp">
                  <p>Nombre: </p>
                  <p>Apellidos: </p>
                  <p>Email: </p>
                  <p>Creado: </p>
                  <p>Actualizado: </p>
              </div>
              <div class="col s6 m5">
                  <p>{{ $user->name }}</p>
                  <p>{{ $user->apellidos }}</p>
                  <p>{{ $user->email }}</p>
                  <p>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</p>
                  <p>{{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans() }}</p>
              </div>
          </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
