@extends('layouts.app_dash')

@section('title', 'Categorias')

@section('content')

<div class="container"><br>

	<h4>Descuentos</h4>
		<div class="card">
			<div class="container_dash">


			<table class="striped">
				<thead>
					<tr>
						<th>Porcentaje</th>
						<th>Categoria</th>
						<th>Última actualización</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($descuentos as $descuento)
					<tr>
						<td>{{ $descuento->porcentaje }}</td>
						<td>{{ $descuento->id_subcategoria }}</td>

						<td>{{ \Carbon\Carbon::parse($descuento->updated_at)->diffForHumans() }}</td>
						<td>
							<a title="editar" class="waves-effect waves-light btn-small" href="{{url ('/descuentos/'.$descuento->id_descuentos.'/edit')}}">
								<i class="fa fa-pencil-square" aria-hidden="true"></i>
							</a>

						<form title="Borrar" method="post" action="{{url('/descuentos/'.$descuento->id_descuentos)}}">
							{{ csrf_field() }}
							{{method_field('DELETE')}}
							<button class="red waves-effect waves-light btn-small" type="submit" onclick="return confirm('¿Desea borrar el producto?');">
								<i class="fa fa-trash" aria-hidden="true"></i>

							</button>
						</form>
						</td>
					</tr>
					{{-- @include('dashboard.categorias.modal-ver')  --}}
					@endforeach
				</tbody>

			</table>
			<br>
			</div>
        </div>
        <div class="center">
            <a href="{{url('/productos/create')}}" class="waves-effect waves-light btn-small">Regresar</a>
        </div><br>
</div>

@endsection
