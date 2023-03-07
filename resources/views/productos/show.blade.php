@extends('layouts.master')

@section('content')

    Detalles producto {{$id}}

    <div class="row">

        <div class="col-sm-4">

            <a href="{{ url('/productos/show/' . $id) }}">
                <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
            </a>

        </div>
        <div class="col-sm-8">

            <h5>Nombre: {{$arrayProductos[0]}}</h5>
            <h5>Categoría: {{$arrayProductos[1]}}</h5>
            <h5>Estado: Producto actualmente comprado</h5>

            <a class="btn btn-danger" href="#">Pendiente de compra</a>

            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar producto</a>

            <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">Volver al listado</a>

        </div>
    </div>

@endsection
