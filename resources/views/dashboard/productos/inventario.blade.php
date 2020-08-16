@extends('layouts.app_dash')

@section('title', 'Productos')

@section('content')

<div class="container_dash">

<div class="row">



	<div class="col s12 m12">
        <br>
        <h1>Inventario</h1>
		<!-- Table -->
		<table>


			<thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Nombre</th>
                  <th class="hide-on-med-and-down" scope="col">RFC</th>
                  <th class="hide-on-med-and-down" scope="col">Material</th>
                  <th class="hide-on-med-and-down" scope="col">Kilataje</th>
                  <th class="hide-on-med-and-down" scope="col">Cantidad</th>
                  <th class="hide-on-med-and-down" scope="col">Estatus</th>
                  <th class="hide-on-med-and-down" scope="col">Actualizado</th>
                  <th scope="col">*</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($inventarios as $inventario)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>
                        <img src="{{ asset($inventario->Foto)}}" alt="50" width="100">
                    </td>
                    <td>{{$inventario->producto}}</td>
                    <td class="hide-on-med-and-down">{{$inventario->RFC}}</td>
                    <td class="hide-on-med-and-down">{{$inventario->material}}</td>
                    <td class="hide-on-med-and-down">{{$inventario->kilataje}}</td>
                    <td class="hide-on-med-and-down">10</td>
                    <td class="hide-on-med-and-down"><span class="white-text badge red">Bajo</span></td>
                    <td class="hide-on-med-and-down">{{ \Carbon\Carbon::parse($inventario->updated_at)->diffForHumans() }}</td>
                    <td></td>
                    <td></td>

                    <td>
                        <a href="#modal_ver_inv-panel{{ $inventario->id_productos }}" class="waves-effect waves-light btn-small modal-trigger"><i class="material-icons">remove_red_eye</i></a>
                        <a href="#modal_ver_add-panel{{ $inventario->id_productos }}" class="waves-effect waves-light btn-small modal-trigger"><i class="material-icons">add_circle_outline</i></a>
                      </td>
                    </tr>

                    @include('layouts.modal.modal-ver-inventario-panel')
                    @include('layouts.modal.modal-ver-add-panel')
                  @endforeach
              </tbody>

		  </table>

          <div>
            {{ $inventarios->links() }}
        </div>

    </div>

</div>

</div><br><br>

@endsection
