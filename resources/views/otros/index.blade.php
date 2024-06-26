@extends('layout')

@section('title', 'Otros')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Otros</h1>
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                @foreach($categorias as $categoria)
                <a href="{{ route('otros.categoria', $categoria) }}" class="list-group-item list-group-item-action">{{ $categoria }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-md-9">
            @foreach($productos as $categoria => $items)
            <h2 id="{{ $categoria }}">{{ $categoria }}</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($items as $producto)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/' . $producto->imagen) }}" class="card-img-top custom-img" alt="{{ $producto->nombre }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">Marca: {{ $producto->marca }}</p>
                            <p class="card-text">Peso: {{ $producto->peso }} {{ $producto->unidad }}</p>
                            <p class="card-text">Precio: ${{ $producto->precio }} CLP</p>
                            <form action="{{ route('carrito.add') }}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" min="1" value="1">
                                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                    <button class="btn btn-primary" type="submit">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
