@extends('layouts.app_dash')

@section('title', 'Editar')

@section('content')


<div class="container_dash">
    <h1>Editar Categoria</h1>
        <div class="row">
            <div class="col m3">
            </div>

            <div class="col m6 s12">
                <div class="card container_dash"><br>
                    <form action="{{ route('categorias.update',$categorias->id_cat)}}"  method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT')}}

                    <div>
                        <label for="categoria">{{'Nombre'}} </label>
                        <input type="text" class="" value="{{$categorias->categoria}}" name="categoria">
                        @if ($errors->has('categoria'))
                            <small class="form-text text-danger">{{ $errors->first('categoria') }}</small>
                        @endif
                    </div>

                    <div>
                        <label for="slug">{{'Slug'}} </label>
                        <input type="text" class="" value="{{$categorias->slug}}" name="slug">
                        @if ($errors->has('slug'))
                            <small class="form-text text-danger">{{ $errors->first('slug') }}</small>
                        @endif
                    </div><br>

                    <div class="center">
                        <button type="submit" value="editar" class="waves-effect waves-light btn-small">Editar</button>
                    </div><br>

                    </form>
                </div>

                <div class="center">
                <a href="{{ route('categorias.index') }}" class="waves-effect waves-light btn-small">Regresar</a>
                </div><br>
            </div>

            <div class="col m3">
            </div>
        </div>
</div>



@endsection
