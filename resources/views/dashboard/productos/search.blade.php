@extends('layouts.app_dash')

@section('title', 'Productos')

@section('content')


<!-- ******************************************************* -->
<div class="container_dash">
    <h3>Busqueda</h3><br>

        <div class="row">
            <form  action='{{url('/panel/search')}}' method='POST' enctype="multipart/form-data">
            {{csrf_field()}}

                <div class="input-field col s12 m5">
                    <select name="kilataje">
                        <option value="" disabled selected>Seleccione Kilataje</option>
                        <option value="10k">10 Kilates</option>
                        <option value="14k">14 Kilates</option>
                        <option value="18k">18 Kilates</option>
                    </select>
                    <label>Kilataje</label>
                </div> 

                <div class="input-field col s6 m6">
                    <input name="RFC" type="search" aria-label="Search" class="validate">
                    <label for="RFC">Ingrese el RFC del producto</label>
                </div>

                <div class="col s6 m1">
                    <button class="waves-effect waves-light btn" type="submit">Buscar</button>
                </div>            
            
            </form>

        </div>

</div><br><br>
<!-- ******************************************************* -->


<!-- ************************* -->

<div class="container_dash">
	<div class="col s12 m8">
		<!-- Table -->
		<table>
			<thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Producto</th>
                  <th class="hide-on-med-and-down" scope="col">Descripción</th>
                  <th class="hide-on-med-and-down" scope="col">RFC</th>
                  <th class="hide-on-med-and-down" scope="col">Kilates</th>
                  <th scope="col">Destac</th>
                  <th scope="col">*</th>
                </tr>
              </thead>
              <tbody>          

                  @foreach ($productos as $prods)

                  <tr>
                      <th>{{$loop->iteration}}</th>
                      <td>
                          <img src="{{ asset($prods->Foto)}}" alt="50" width="100">
                      </td>
                      <td>{{$prods->producto}}</td>
                      <td class="hide-on-med-and-down">{{$prods->descripcion}}</td>
                      <td class="hide-on-med-and-down">{{$prods->RFC}}</td>
                      <td class="hide-on-med-and-down">{{$prods->kilataje}}</td>
                      <td>
                      @if ($prods->destacado === 1)
                          Si
                      @else
                          No
                      @endif
                      </td>

                      <td>
                          <a href="#modal_ver_prod{{ $prods->id_productos }}" class="waves-effect waves-light btn-small modal-trigger"><i class="material-icons">remove_red_eye</i></a>

                          <a title="editar" class="waves-effect waves-light btn-small" href="{{url ('/productos/'.$prods->id_productos.'/edit')}}">
                              <i class="fa fa-pencil-square" aria-hidden="true"></i>
                          </a>


                      <form title="Borrar" method="post" action="{{url('/productos/'.$prods->id_productos)}}">
                          {{ csrf_field() }}
                          {{method_field('DELETE')}}
                          <button class="red waves-effect waves-light btn-small" type="submit" onclick="return confirm('¿Desea borrar el producto?');">
                              <i class="fa fa-trash" aria-hidden="true"></i>

                          </button>
                      </form>
                      </td>
                    </tr>







                    @include('layouts.modal.modal-ver-productos')
                  @endforeach
              </tbody>

		  </table>

          <div>
            {{ $productos->links() }}
        </div>

	</div><br> <br>


<!-- **************************************************** -->

<div>
    <a href="{{ url('/productos/create') }}" class="btn">Regresar</a>
</div><br>

<!-- **************************************************** -->



</div>

<!-- ************************* -->


@endsection