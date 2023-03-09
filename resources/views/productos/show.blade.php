@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-sm-4">

            <a href="{{ url('/productos/show/' . $producto['id']) }}">
                <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
            </a>

        </div>
        <div class="col-sm-8">
            <!--Nombre del producto-->
            <h3>Nombre: {{$producto['nombre']}}</h3>

            <!--Precio del producto-->
            <h5>Precio: {{$producto['precio']}}</h5>

            <!--Categoria del producto-->
            <h5>Categoría: {{$producto['categoria']}}</h5>

            <!--Descripción del producto-->
            <h5>Descripción: {{$producto['descripcion']}}</h5>

            <!--Estado del producto-->
            @if($producto['pendiente'])
                <h5>Estado: Producto actualmente comprado</h5>
            @else
                <h5>Estado: Pendiente de compra</h5>
            @endif

            <!--Formulario del botón comprar-->
            <form action="{{ url('/productos/comprar/'.$producto['id'])}}" method="POST">
                {{method_field('PUT')}}
                @csrf
                <div>
                    <button type="submit" class="btn btn-danger" style="float:left; margin-right:5px">
                        Comprar
                    </button>
                 </div>
            </form>

            <!--Botón de editar-->
            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto['id'] ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar producto</a>

            <!--Botón de volver al listado-->
            <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">Volver al listado</a>

        </div>
    </div>

@endsection
