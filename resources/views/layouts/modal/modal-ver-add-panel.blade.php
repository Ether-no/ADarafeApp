<!-- Modal Structure -->
<div id="modal_ver_add-panel{{ $inventario->id_productos }}" class="modal">
    <div class="modal-content">
    <h5 class="text-modal-hlp">Producto: {{ $inventario->producto }}</h5>

          <div class="row">
              <div class="right-align text-modal-hlp">
                  <div class="input-field col s12 m12">
                      <i class="material-icons prefix">cached</i>
                      <input id="icon_prefix" type="number" class="validate">
                      <label for="icon_prefix">&nbsp;&nbsp;&nbsp;Cantidad</label>
                    </div>
              </div>
          </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
    </div>
  </div>
