@extends('layouts.app_dash')

@section('title', 'Editar')

@section('content')


<div class="container_dash">

<h1>Editar Producto</h1>

<div class="row">
  <div class="col m3">

  </div>



  <div class="col m6 s12">
<div class="card container_dash"><br>

<form action="{{url('/productos/'.$productos->id_productos)}}" class=""  method='POST' enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}

        <div class="">
            <label for="producto">{{'Producto'}} </label>
            <input type="text" class="" placeholder="Producto" value="{{$productos->producto}}" name="producto">
            @if ($errors->has('producto'))
                <small class="form-text text-danger">{{ $errors->first('producto') }}</small>
            @endif
        </div>



        <div class="">
            <label for="descripcion">{{'Descripción'}} </label>
            <input type="text" class="" placeholder="Descripción" value="{{$productos->descripcion}}" name="descripcion">
            @if ($errors->has('descripcion'))
                <small class="form-text text-danger">{{ $errors->first('descripcion') }}</small>
            @endif
        </div>


        <div class="">
          <label for="material">{{'Metal'}} </label>
          <input type="text" class="" placeholder="Metal" value="{{$productos->material}}" name="material">
          @if ($errors->has('material'))
            <small class="form-text text-danger">{{ $errors->first('material') }}</small>
          @endif
        </div>


        <div class="">
            <label for="precio">{{'Precio'}} </label>
            <input type="text" class="" placeholder="Precio" value="{{$productos->precio}}" name="precio">
            @if ($errors->has('precio'))
                <small class="form-text text-danger">{{ $errors->first('precio') }}</small>
            @endif
        </div>


        <div class="">
            <label for="RFC">{{'RFC'}} </label>
            <input type="text" class="" placeholder="RFC" value="{{$productos->RFC}}" name="RFC">
            @if ($errors->has('RFC'))
                <small class="form-text text-danger">{{ $errors->first('RFC') }}</small>
            @endif
        </div>



        <div class="center">
			<img src="{{ asset($productos->Foto)}}" alt="200" width="200"><br>
            <input type="file" name="Foto" class="" id="Foto" value="">
            @if ($errors->has('Foto'))
                <small class="form-text text-danger">{{ $errors->first('Foto') }}</small>
            @endif
        </div><br>


        @php ($kilatajes=['10k','14k','18k'])
        <div>
            <label for="kilataje">Kilataje</label>
            <div>
                <select id="kilataje" name="kilataje">
                    @foreach($kilatajes as $kilate)
                        <option
                        @if($productos->kilataje == $kilate)
                        selected
                        @endif
                        >{{ $kilate }}</option>
                    @endforeach
                </select>
            </div>
            @if ($errors->has('kilataje'))
                <small class="form-text text-danger">{{ $errors->first('kilataje') }}</small>
            @endif
        </div>


        <div>
            <label for="id_cat" class="">Categoría</label>
                <div>
                    <Select class="" name="id_cat">
                        @foreach($categorias as $categoria)
                            @if($productos->id_cat == $categoria->id_cat)
                            <option value="{{ $categoria->id_cat }}">{{ $categoria->categoria }}</option>
                            @endif
                        @endforeach

                        @foreach($categorias as $categoria)
                            @if($productos->id_cat != $categoria->id_cat)
                            <option value="{{ $categoria->id_cat }}">{{ $categoria->categoria }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                @if ($errors->has('id_cat'))
                    <small class="form-text text-danger">{{ $errors->first('id_cat') }}</small>
                @endif
        </div>


        <div>
            <label for="id_subcategoria" class="">Sub Categorias</label>
                <div>
                    <Select class="" name="id_subcategoria">
                        @foreach($subcategorias as $subcategoria)
                            @if($productos->id_subcategoria == $subcategoria->id_subcategoria)
                            <option value="{{ $subcategoria->id_subcategoria }}">{{ $subcategoria->nombre }}</option>
                            @endif
                        @endforeach

                        @foreach($subcategorias as $subcategoria)
                            @if($productos->id_subcategoria != $subcategoria->id_subcategoria)
                            <option value="{{ $subcategoria->id_subcategoria }}">{{ $subcategoria->nombre }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                @if ($errors->has('id_subcategoria'))
                    <small class="form-text text-danger">{{ $errors->first('id_subcategoria') }}</small>
                @endif
        </div>

        @if ($productos->destacado == 1)
            @php ($uno = 'checked')
            @php ($cero = '')
        @else
            @php ($uno = '')
            @php ($cero = 'checked')
        @endif
        <div>
            <label for="exampleRadios1">
                ¿Articulo Destacado?
                </label>

                <p>
                    <label>
                        <input type="radio" name="destacado" id="exampleRadios1" value="1" {{ $uno }}>
                        <span>Si</span>
                    </label>
                </p>

                <p>
                    <label>
                        <input type="radio" name="destacado" id="exampleRadios2" value="0" {{ $cero }}>
                        <span>No</span>
                    </label>
                </p>
        </div>


        <div class="center">
          <button type="submit" value="editar" class="waves-effect waves-light btn-small">Editar</button>
        </div><br>


</form>

</div>

<div class="center">
    <a href="{{url('/productos/create')}}" class="waves-effect waves-light btn-small">Regresar</a>
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
