<!-- Modal Structure -->
<div id="modal_ver_sub{{ $subcategoria->id_subcategoria }}" class="modal">
  <div class="modal-content">
    <h5 class="text-modal-hlp">{{ $subcategoria->nombre }}</h5>
        <div class="row">
            <div class="col s6 m2 right-align text-modal-hlp">
                <p>Categoría:</p>
                <p>Activo:</p>
                <p>Creado:</p>
                <p>Actualizado:</p>
            </div>
            <div class="col s6 m3">
                <p>{{ $subcategoria->nombre }}</p>
                <p>
                    @if($subcategoria->activo === 1)
                    Si
                    @else
                    No
                    @endif
                </p>
                <p>{{ \Carbon\Carbon::parse($subcategoria->created_at)->diffForHumans() }}</p>
                <p>{{ \Carbon\Carbon::parse($subcategoria->updated_at)->diffForHumans() }}</p>
            </div>
        </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
  </div>
</div>
