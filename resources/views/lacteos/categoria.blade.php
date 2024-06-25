@extends('layout')

@section('title', $categoria)

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">{{ $categoria }}</h1>
    <div class="row">
        <!-- Sidebar de categorías -->
        <div class="col-md-3">
            <div class="list-group">
                @foreach($categorias as $key => $categoriaItem)
                <a href="{{ route('lacteos.categoria', $key) }}" class="list-group-item list-group-item-action {{ $categoria == $categoriaItem ? 'active' : '' }}">{{ $categoriaItem }}</a>
                @endforeach
            </div>
        </div>
        <!-- Fin Sidebar -->

        <!-- Lista de productos -->
        <div class="col-md-9">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($productos as $producto)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/' . $producto['imagen']) }}" class="card-img-top" alt="{{ $producto['marca'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $categoria }} - {{ $producto['marca'] }}</h5>
                            <p class="card-text">${{ $producto['precio'] }} CLP</p>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Fin Lista de productos -->
    </div>
</div>
@endsection
