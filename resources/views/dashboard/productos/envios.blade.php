@extends('layouts.app_dash')

@section('title', 'Productos')

@section('content')

<div class="container_dash">

<div class="row">



	<div class="col s12 m12">
        <br>
        <h1>Envíos</h1>
		<!-- Table -->
		<table>


			<thead>
                <tr>
                  <th>ID Pedido</th>
                  <th>Nombre</th>
                  <th class="hide-on-med-and-down" scope="col">Ciudad</th>
                  <th class="hide-on-med-and-down" scope="col">CP</th>
                  <th class="hide-on-med-and-down" scope="col">Fecha de Pedido</th>
                  <th class="hide-on-med-and-down" scope="col">Enviado</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>#123456AU</td>
                    <td>Name 1</td>
                    <td class="hide-on-med-and-down">Toluca</td>
                    <td class="hide-on-med-and-down">50230</td>
                    <td class="hide-on-med-and-down">hace 4 días</td>
                    <td>
                        <div class="switch">
                            <label>
                              Pendiente
                              <input type="checkbox">
                              <span class="lever"></span>
                              Envíado
                            </label>
                          </div>
                    </td>
                    <td></td>

                    <td>
                        <a href="#!" class="waves-effect waves-light btn-small modal-trigger"><i class="material-icons">remove_red_eye</i></a>

                      </form>
                      </td>
                    </tr>


                    <tr>
                        <td>#123456AU</td>
                        <td>Name 2</td>
                        <td class="hide-on-med-and-down">CDMex</td>
                        <td class="hide-on-med-and-down">30420</td>
                        <td class="hide-on-med-and-down">hace 10 días</td>
                        <td>
                            <div class="switch">
                                <label>
                                  Pendiente
                                  <input type="checkbox">
                                  <span class="lever"></span>
                                  Envíado
                                </label>
                              </div>
                        </td>
                        <td></td>

                        <td>
                            <a href="#!" class="waves-effect waves-light btn-small modal-trigger"><i class="material-icons">remove_red_eye</i></a>

                          </form>
                          </td>
                        </tr>

              </tbody>

		  </table>

          <div>

        </div>

    </div>

</div>

</div><br><br>

@endsection
