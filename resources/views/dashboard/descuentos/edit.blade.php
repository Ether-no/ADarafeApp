@extends('layouts.app_dash')

@section('title', 'Editar')

@section('content')


<div class="container_dash">

<h1>Editar Descuento</h1>

<div class="row">
  <div class="col m3">

  </div>



  <div class="col m6 s12">
<div class="card container_dash"><br>

<form action="{{url('/descuentos/'.$descuentos->id_descuentos)}}" class=""  method='POST' enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}

        <div class="">
            <label for="porcentaje">{{'Descuento'}} </label>
            <input type="text" class="" placeholder="Porcentaje" value="{{$descuentos->porcentaje}}" name="porcentaje">
        </div>

        <div class="">
          <label for="descuento">{{'Sub Categoria'}} </label>
          <input type="text" class="" placeholder="SubCategoria" value="{{$descuentos->id_subcategoria}}" name="id_subcategoria">
        </div>


        <div class="center">
          <button type="submit" value="editar" class="waves-effect waves-light btn-small">Editar</button>
        </div><br>


</form>

</div>

<div class="center">
    <a href="{{url('/descuentos')}}" class="waves-effect waves-light btn-small">Regresar</a>
</div><br>



  </div>


  <div class="col m3">

  </div>
</div>


</div>



<script>
var categoria_id;
$(document).ready(function(){
	$('#select-categoria').on('change', onSelectCategorias);
});

function onSelectCategorias(){
  categoria_id = $(this).val();
  console.log(categoria_id);

//PETICION AJAX

}$.get('/api/categoria/1/subcategoria',function(data){
	var html_select = '<option value="">Selecione Subcategoria</option>';
	for (var i = 0; i < data.length; i++)
	html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>'
	console.log(html_select);
	console.log(categoria_id);
	$('#select-subcategoria').html(html_select);
});
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>


@endsection
