@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <a href="{{ url('/productos/show/' . $producto['id']) }}">
                <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
            </a>

        </div>
        <div class="col-sm-8">
            <!--Nombre producto-->
            <h5>Nombre: {{$producto['nombre']}}</h5>

            <!--Categoria producto-->
            <h5>Categoría: {{$producto['categoria']}}</h5>

            <!--Botón de Comprar/Comprado-->
            @if($producto['pendiente'])
                <a class="btn btn-danger" href="#">Comprado</a>
            @else
                <a class="btn btn-success" href="#">Comprar</a>
            @endif

            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto['id'] ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar producto</a>

            <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">Volver al listado</a>

        </div>
    </div>

@endsection
