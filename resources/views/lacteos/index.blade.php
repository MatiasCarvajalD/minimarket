@extends('layout')

@section('title', 'Lácteos')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Lácteos</h1>
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                @foreach($categorias as $categoria)
                <a href="{{ route('lacteos.categoria', $categoria) }}" class="list-group-item list-group-item-action">{{ $categoria }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-md-9">
            @foreach($lacteos as $categoria => $productos)
            <h2 id="{{ $categoria }}">{{ $categoria }}</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($productos as $lacteo)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/' . $lacteo->imagen) }}" class="card-img-top custom-img" alt="{{ $lacteo->nombre }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $lacteo->nombre }}</h5>
                            <p class="card-text">Marca: {{ $lacteo->marca }}</p>
                            <p class="card-text">Peso: {{ $lacteo->peso }}g</p>
                            <p class="card-text">Precio: ${{ $lacteo->precio }} CLP</p>
                            <form action="{{ route('carrito.add') }}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" min="1" value="1">
                                    <input type="hidden" name="producto_id" value="{{ $lacteo->id }}">
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
