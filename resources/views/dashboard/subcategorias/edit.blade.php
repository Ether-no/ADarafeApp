@extends('layouts.app_dash')

@section('title', 'Editar')

@section('content')


<div class="container_dash">
    <h1>Editar Sub Categoria</h1>
        <div class="row">
            <div class="col m3">
            </div>

            <div class="col m6 s12">
                <div class="card container_dash"><br>
                    <form action="{{ route('subcategorias.update',$subcategorias->id_subcategoria)}}"  method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}

                    <div>
                        <label for="nombre">{{'Nombre'}} </label>
                        <input type="text" class="" value="{{$subcategorias->nombre}}" name="nombre">
                        @if ($errors->has('nombre'))
                            <small class="form-text text-danger">{{ $errors->first('nombre') }}</small>
                        @endif
                    </div>

                    <div>
                        <Select class="" name="id_cat">
                            @foreach($categorias as $categoria)
                                @if($subcategorias->id_cat == $categoria->id_cat)
                                <option value="{{ $categoria->id_cat }}">{{ $categoria->categoria }}</option>
                                @endif
                            @endforeach

                            @foreach($categorias as $categoria)
                                @if($subcategorias->id_cat != $categoria->id_cat)
                                <option value="{{ $categoria->id_cat }}">{{ $categoria->categoria }}</option>
                                @endif
                            @endforeach
                        </Select>

                        @if ($errors->has('id_cat'))
                            <small class="form-text text-danger">{{ $errors->first('id_cat') }}</small>
                        @endif
                    </div><br>

                    <div class="center">
                        <button type="submit" value="editar" class="waves-effect waves-light btn-small">Editar</button>
                    </div><br>

                    </form>
                </div>

                <div class="center">
                <a href="{{ route('subcategorias.index') }}" class="waves-effect waves-light btn-small">Regresar</a>
                </div><br>
            </div>

            <div class="col m3">
            </div>
        </div>
</div>



@endsection
