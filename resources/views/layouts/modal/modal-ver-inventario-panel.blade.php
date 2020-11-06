<!-- Modal Structure -->
<div id="modal_ver_inv-panel{{ $inventario->id_productos }}" class="modal">
    <div class="modal-content">
    <h5 class="text-modal-hlp">Usuario: {{ $inventario->producto }}</h5>

          <div class="row">
              <div class="col s6 m5 right-align text-modal-hlp">
                  <p>Nombre: </p>
                  <p>RFC: </p>
                  <p>Material: </p>
                  <p>Kilataje: </p>
                  <p>Creado: </p>
                  <p>Actualizado: </p>
              </div>
              <div class="col s6 m5">
                  <p>{{ $inventario->producto }}</p>
                  <p>{{ $inventario->RFC }}</p>
                  <p>{{ $inventario->material }}</p>
                  <p>{{ $inventario->kilataje }}</p>
                  <p>{{ \Carbon\Carbon::parse($inventario->created_at)->diffForHumans() }}</p>
                  <p>{{ \Carbon\Carbon::parse($inventario->updated_at)->diffForHumans() }}</p>
              </div>
          </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
