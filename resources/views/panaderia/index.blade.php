@extends('layout')

@section('title', 'Panadería')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Panadería</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($productos as $producto)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/' . $producto->imagen) }}" class="card-img-top custom-img" alt="{{ $producto->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto->nombre }}</h5>
                    <p class="card-text">Peso: {{ $producto->peso }}g</p>
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
</div>
@endsection
