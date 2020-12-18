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

<div class="container_dash">

<div class="row"><br>

	<div class="col s12 m4">

		<div class="card container_dash"><br>

		<h4>Nuevo producto</h4>

		<form class="form-row formularioproducto" action='{{url('/productos')}}' method='POST' enctype="multipart/form-data">
		{{csrf_field()}}

            <div class="row">
                <div class="input-field col s12">
                    <input type="text" class="validate" value="{{old('producto')}}" name="producto" id="producto">
                        @if ($errors->has('producto'))
                            <small class="form-text text-danger">{{ $errors->first('producto') }}</small>
                        @endif
                    <label for="producto">Producto</label>
                </div>

                <div class="input-field col s12">
                    <textarea
                    class="materialize-textarea validate"
                    name="descripcion"
                    value="{{old('descripcion')}}"
                    data-length="120"
                    id="descripcion"></textarea>
                    @if ($errors->has('descripcion'))
                        <small class="form-text text-danger">{{ $errors->first('descripcion') }}</small>
                    @endif
                    <label for="descripcion">Descripcion</label>
                </div>


                <div class="input-field col s12">
                    <input type="text" class="validate" value="{{old('RFC')}}" name="RFC">
                    @if ($errors->has('RFC'))
                    <small class="form-text text-danger">{{ $errors->first('RFC') }}</small>
                    @endif
                    <label for="RFC">RFC</label>
                </div>


                <div class="input-field col s12">
                    <input type="text" class="validate" value="{{old('material')}}" name="material">
                    @if ($errors->has('material'))
                    <small class="form-text text-danger">{{ $errors->first('material') }}</small>
                    @endif
                    <label for="material">Metal</label>
                </div>

                <div class="input-field col s12">
                    <input
                    type="text"
                    class="validate"
                    value="{{old('precio')}}"
                    name="precio"
                    id="precio">
                    @if ($errors->has('precio'))
                    <small class="form-text text-danger">{{ $errors->first('precio') }}</small>
                    @endif
                    <label for="precio">Precio</label>
                </div>
            </div>

		<div class="">
			<label for="inputState">Kilataje</label>
				<select name="kilataje" class="">
					<option value=""></option>
					<option value="10k">10 Kilates</option>
					<option value="14k">14 Kilates</option>
					<option value="18k">18 Kilates</option>
                </select>
                @if ($errors->has('kilataje'))
                <small class="form-text text-danger">{{ $errors->first('kilataje') }}</small>
                @endif
		</div>

		<div>
			<label for="inputState">Categoria</label>
				<select name="id_cat" id="select-categoria">
					<option value=""></option>
						@foreach ($categorias ?? '' as  $categoria)
							<option value="{{$categoria->id_cat}}"> {{$categoria->categoria}} </option>
						@endforeach
                </select>
                @if ($errors->has('id_cat'))
                <small class="form-text text-danger">{{ $errors->first('id_cat') }}</small>
                @endif
		</div>

		<div id="id_subcat">
            <select name="id_subcategoria" id="select-categoria">
                <option value=""></option>
                    @foreach ($subcategorias ?? '' as  $scategoria)
                        <option value="{{$scategoria->id_subcategoria}}"> {{$scategoria->nombre}} </option>
                    @endforeach
            </select>

                @if ($errors->has('id_subcategoria'))
                <small class="form-text text-danger">{{ $errors->first('id_subcategoria') }}</small>
                @endif
        </div>
        <div class="input-field col s12" id="pesoaprox">
            <label for="peso">Peso Aproximado</label>
            <input type="text" class="validate" value="0" name="peso" id="peso">
            @if ($errors->has('peso'))
            <small class="form-text text-danger">{{ $errors->first('peso') }}</small>
            @endif
            
        </div>
        <div class="input-field col s12">
            <label for="tags">Ingrese las etiquetas separadas por una (,).</label>
            <input type="text" class="validate" value="{{old('tags')}}" name="tags" id="tags">
            @if ($errors->has('tags'))
            <small class="form-text text-danger">{{ $errors->first('tags') }}</small>
            @endif
        </div>
        <br>
        <label for="exampleRadios1">
        ¿Articulo Destacado?
        </label>
        <p>
            <label>
            <input type="radio" name="destacado" id="exampleRadios1" value="1">
            <span>Si</span>
            </label>
        </p>

        <p>
            <label>
                <input type="radio" name="destacado" id="exampleRadios2" value="0" checked="checked">
                <span>No</span>
            </label>
        </p>
        <label for="exampleRadios2">
            ¿Se puede grabar?
            </label>
            <p>
                <label>
                <input type="radio" name="grabado" id="radiosgrabar1" value="1" checked="checked">
                <span>Si</span>
                </label>
            </p>
    
            <p>
                <label>
                    <input type="radio" name="grabado" id="radiosgrabar0" value="0">
                    <span>No</span>
                </label>
            </p>
            <div id="fgrabar">
                <label>Foto Grabado</label><br>
                <input type="file" name="fotograbado" id="fotograbado">
                @if ($errors->has('fotograbado'))
                <small class="form-text text-danger">{{ $errors->first('fotograbado') }}</small>
                @endif
            </div>
            <label for="exampleRadios3">
                ¿Se puede agrandar el numero?
                </label>
                <p>
                    <label>
                    <input type="radio" name="agrandar" id="radioagrandarvalue1" value="1" checked="checked">
                    <span>Si</span>
                    </label>
                </p>
        
                <p>
                    <label>
                        <input type="radio" name="agrandar" id="radioagrandarvalue0" value="0">
                        <span>No</span>
                    </label>
                </p>
                <div class="input-field col s12" id="numerominimo" >
                    <label for="numerominimo">Numero minimo</label>
                    <input type="text" class="validate" value="0" name="numerominimo" id="numerominimo">
                    @if ($errors->has('numerominimo'))
                    <small class="form-text text-danger">{{ $errors->first('numerominimo') }}</small>
                    @endif
                </div>
                <div class="input-field col s12" id="numeromaximo" >
                    <label for="numeromaximo">Numero Maximo</label>
                    <input type="text" class="validate" value="0" name="numeromaximo" id="numeromaximo">
                    @if ($errors->has('numeromaximo'))
                    <small class="form-text text-danger">{{ $errors->first('numeromaximo') }}</small>
                    @endif
                </div>
        <div>
            <label>Foto</label><br>
            <input type="file" name="Foto" id="Foto">
            @if ($errors->has('Foto'))
            <small class="form-text text-danger">{{ $errors->first('Foto') }}</small>
            @endif
        </div>
        <div>
            <label>Foto Vista 1</label><br>
            <input type="file" name="fotovista1" id="fotovista1">
            @if ($errors->has('fotovista1'))
            <small class="form-text text-danger">{{ $errors->first('fotovista1') }}</small>
            @endif
        </div>
        <div>
            <label>Foto Vista 2</label><br>
            <input type="file" name="fotovista2" id="fotovista2">
            @if ($errors->has('fotovista2'))
            <small class="form-text text-danger">{{ $errors->first('fotovista2') }}</small>
            @endif
        </div>

		<div class="center">
			<input type="submit" class="waves-effect waves-light btn white-text" value="Registrar Producto">
		</div><br>

        </form>

	</div>

</div>

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
                  <th class="hide-on-med-and-down" scope="col">Cat</th>
                  <th class="hide-on-med-and-down" scope="col">SubCat</th>
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
                      <td></td>
                      <td></td>
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

	</div>

</div>

	{{-- div de categorias --}}
	<div class="row">
		<div class="col s12 m6">
			<div class="card">
				<div class="container_dash">
					<form class="form-row formularioproducto" action='{{url('/categorias')}}' method='POST' enctype="multipart/form-data"><br>
							{{csrf_field()}}
							<h4>Nueva categoria</h4>
							<div class="input-field col s12">
								<input type="text"
									class="validate"
									value="{{old('categoria')}}"
									name="categoria"
									id="categoria">

								<label for="categoria">Categoria</label>
							</div>

							<div class="input-field col s12">
								<input
									type="text"
									value="{{old('slug')}}"
									name="slug"
									id="slugcat"
									placeholder="URL Slug">
							</div>
							<div class="center"><br>
								<input type="submit" class="waves-effect waves-light btn white-text" value="Registrar Categoria">
								<a href="{{ url('categorias') }}" title="view" class="waves-effect waves-light btn white-text">Mis categorias</a>
							</div><br>
					</form>
				</div>
			</div>
		</div>

		<div class="col s12 m6">
		{{-- div de SUB categorias --}}
			<div class="card">
				<div class="container_dash">
					<form class="form-row formularioproducto" action='{{url('/subcategorias')}}' method='POST' enctype="multipart/form-data"><br>
						{{csrf_field()}}
						<h4>Nueva subcategoria</h4>
						<div class="input-field col s12">
							<input type="text" class="validate" value="{{old('nombre')}}" name="nombre">
							<label for="nombre">Sub Categoria</label>
						</div>
						<div>
							<label for="inputState">Categoria</label>
								<select name="id_cat" id="select-categoria">
									<option value=""> Seleccione Categoria </option>
										@foreach ($categorias ?? '' as  $categoria)
											<option value="{{$categoria->id_cat}}"> {{$categoria->categoria}} </option>
										@endforeach
								</select>
						</div>
						<div class="center"><br>
							<input type="submit" class="waves-effect waves-light btn white-text" value="Registrar SubCategoria">
							<a href="{{ url('subcategorias') }}" title="view" class="waves-effect waves-light btn white-text">Mis sub categorias</a>
						</div><br>
					</form>
				</div>
			</div>
		</div>
	</div>
	{{-- Descuentos de articulos --}}
	<div class="col s12 m6">
		<div class="card">
			<div class="container_dash">
				<form class="form-row formularioproducto" action='{{url('/descuentos')}}' method='POST' enctype="multipart/form-data"><br>
						{{csrf_field()}}
						<h4>Descuentos a categorias</h4>
						<h6>Todos los productos con la categoria selecionada tendran el descuento</h6>
						<div class="input-field col s12">
							<input type="text"
								class="validate"
								value="{{old('porcentaje')}}"
								name="porcentaje"
								id="porcentaje">

							<label for="porcentaje">Porcentaje de descuento</label>
						</div>

						<div>
							<label for="inputState">Sub Categoria</label>
								<select name="id_subcategoria">
									<option value=""> Seleccione SubCategoria </option>
										@foreach ($subcategorias ?? '' as  $subcategoria)
											<option value="{{$subcategoria->id_subcategoria}}"> {{$subcategoria->nombre}} </option>
										@endforeach
								</select>
						</div>
						<div class="center"><br>
							<input type="submit" class="waves-effect waves-light btn white-text" value="Aplicar Descuento">
							<a href="{{ url('descuentos') }}" title="view" class="waves-effect waves-light btn white-text">Mis Descuentos</a>
						</div><br>
				</form>
			</div>
		</div>
	</div>
	{{-- termina descuentos --}}



</div><br>

@endsection
