@extends('layouts.app_dash')

@section('title', 'Categorias')

@section('content')

<div class="container"><br>

	<h4>Sub Categorias</h4>
		<div class="card">
			<div class="container_dash">

			<table>
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Activo</th>
						<th>Última actualización</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($subcategorias as $subcategoria)
					<tr>
						<td>{{$subcategoria->nombre}}</td>
						<td>{{$subcategoria->activo}}</td>
						<td>{{\Carbon\Carbon::parse($subcategoria->updated_at)->diffForHumans()}}</td>
						<td>
						<form action="{{ route('subcategorias.destroy', $subcategoria->id_subcategoria) }}" method="post">

							<a href="#modal_ver_sub{{ $subcategoria->id_subcategoria }}" class="waves-effect waves-light btn-small modal-trigger"><i class="material-icons">remove_red_eye</i></a>

							<a href="{{ route('subcategorias.edit', $subcategoria->id_subcategoria) }}" title="Editar" class="waves-effect waves-light btn-small"><i class="material-icons">edit</i></a>

							@csrf
							@method('DELETE')
							<button type="submit" onclick="return confirm('¿Desea borrar esta subcategoria?');" class="waves-effect waves-light btn-small"><i class="material-icons">delete</i></button>
						</form>
						</td>
					</tr>
					@include('layouts.modal.modal_ver_subcategorias')
					@endforeach
				</tbody>
			</table>

			<div class="center">
				{{ $subcategorias->links() }}
			</div><br>
			</div>
        </div>
        <div class="center">
            <a href="{{url('/productos/create')}}" class="waves-effect waves-light btn-small">Regresar</a>
        </div><br>
</div>

@endsection
