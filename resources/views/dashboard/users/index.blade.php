@extends('layouts.app_dash')

@section('title', 'Productos')

@section('content')

<div class="container_dash">

<div class="row">



	<div class="col s12 m12">
        <br>
        <h1>Usuarios</h1>
		<!-- Table -->
		<table>


			<thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th class="hide-on-med-and-down" scope="col">Apellidos</th>
                  <th class="hide-on-med-and-down" scope="col">Email</th>
                  <th class="hide-on-med-and-down" scope="col">Creado</th>
                  <th class="hide-on-med-and-down" scope="col">Actualizado</th>
                  <th scope="col">*</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$user->name}}</td>
                    <td class="hide-on-med-and-down">{{$user->apellidos}}</td>
                    <td class="hide-on-med-and-down">{{$user->email}}</td>
                    <td class="hide-on-med-and-down">{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                    <td class="hide-on-med-and-down">{{ \Carbon\Carbon::parse($user->updated_at)->diffForHumans() }}</td>
                    <td></td>
                    <td></td>

                    <td>
                        <a href="#modal_ver_us-panel{{ $user->id }}" class="waves-effect waves-light btn-small modal-trigger"><i class="material-icons">remove_red_eye</i></a>
                        <a title="editar" class="waves-effect waves-light btn-small" href="#!"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                        <form title="Borrar" method="post" action="#!">
                          {{ csrf_field() }}
                          {{method_field('DELETE')}}
                          <button class="red waves-effect waves-light btn-small" type="submit" onclick="return confirm('¿Desea borrar el producto?');">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>
                      </form>
                      </td>
                    </tr>

                    @include('layouts.modal.modal-ver-user-panel')
                  @endforeach
              </tbody>

		  </table>

          <div>
            {{ $users->links() }}
        </div>

    </div>

</div>

</div><br><br>

@endsection
