@extends('layouts.app_dash')

@section('title', 'Categorias')

@section('content')

<div class="container"><br>

	<h4>Categorias</h4>
		<div class="card">
			<div class="container_dash">


			<table class="striped">
				<thead>
					<tr>
						<th>Nombre</th>
						<th class="hide-on-med-and-down">URL</th>
						<th>Activo</th>
						<th>Última actualización</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($categorias as $categoria)
					<tr>
						<td>{{ $categoria->categoria }}</td>
						<td class="hide-on-med-and-down">{{ $categoria->slug }}</td>
						<td>
						@if($categoria->activo === 1)
							Si
						@else
							No
						@endif
						</td>

						<td>{{ \Carbon\Carbon::parse($categoria->updated_at)->diffForHumans() }}</td>
						<td>

						<form action="{{ route('categorias.destroy', $categoria->id_cat) }}" method="post">

							<a href="#modal_ver{{ $categoria->id_cat }}" class="waves-effect waves-light btn-small modal-trigger"><i class="material-icons">remove_red_eye</i></a>

							<a href="{{ route('categorias.edit', $categoria->id_cat) }}" title="Editar" class="waves-effect waves-light btn-small"><i class="material-icons">edit</i></a>

							@csrf
							@method('DELETE')
							<button type="submit" onclick="return confirm('¿Desea borrar esta categoria?');" class="waves-effect waves-light btn-small"><i class="material-icons">delete</i></button>
						</form>

						</td>
					</tr>
					@include('layouts.modal.modal-ver-categorias')
					@endforeach
				</tbody>

			</table>
			<div class="center">
				{{ $categorias->links() }}
			</div><br>
			</div>
        </div>
        <div class="center">
            <a href="{{url('/productos/create')}}" class="waves-effect waves-light btn-small">Regresar</a>
        </div><br>
</div>

@endsection
