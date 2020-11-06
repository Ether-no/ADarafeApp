<!-- Modal Structure -->
<div id="modal_ver{{ $categoria->id_cat }}" class="modal">
  <div class="modal-content">
    <h5 class="text-modal-hlp">{{ $categoria->categoria }}</h5>
        <div class="row">
                <div class="col s6 m2 right-align text-modal-hlp">
                    <p>Categoría:</p>
                    <p>Slug:</p>
                    <p>Activo:</p>
                    <p>Creado:</p>
                    <p>Actualizado:</p>
                </div>

                <div class="col s6 m3">
                    <p>{{ $categoria->categoria }}</p>
                    <p>{{ $categoria->slug }}</p>
                    <p>
                        @if($categoria->activo === 1)
                        Si
                        @else
                        No
                        @endif
                    </p>
                    <p>{{ \Carbon\Carbon::parse($categoria->created_at)->diffForHumans() }}</p>
                    <p>{{ \Carbon\Carbon::parse($categoria->updated_at)->diffForHumans() }}</p>
                </div>
        </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect btn-flat">Cerrar</a>
  </div>
</div>
