<!-- Modal Structure -->
<div id="modal_ver_prod{{ $prods->id_productos }}" class="modal">
  <div class="modal-content">
    <h5 class="text-modal-hlp">{{ $prods->producto }}</h5>

        <div class="row">
            <div class="col s6 m2 right-align text-modal-hlp">
                <p>Descripción: </p>
                <p>RFC: </p>
                <p>Material: </p>
                <p>Destacado: </p>
                <p>Kilataje: </p>
                <p>Precio: </p>
                <!--<p>Categoría: </p>
                <p>ubcategoria: </p>-->
                <p>Creado: </p>
                <p>Actualizado: </p>
            </div>
            <div class="col s6 m3">
                <p>{{ $prods->descripcion }}</p>
                <p>{{ $prods->RFC }}</p>

                <p>{{ $prods->material }}</p>
                <p>
                @if ($prods->destacado === 1)
                    Si
                @else
                    No
                @endif
                </p>
                <p>{{ $prods->kilataje }}</p>
                <p>{{ $prods->precio }}</p>
                <!--<p></p>
                <p></p>-->
                <p>{{ \Carbon\Carbon::parse($prods->created_at)->diffForHumans() }}</p>
                <p>{{ \Carbon\Carbon::parse($prods->updated_at)->diffForHumans() }}</p>
            </div>
        </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
  </div>
</div>
