@extends('layout')

@section('title', 'Galletas')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Galletas</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($productos as $producto)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/' . $producto['imagen']) }}" class="card-img-top" alt="{{ $producto['nombre'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto['nombre'] }}</h5>
                    <p class="card-text">{{ $producto['marca'] }} - {{ $producto['peso'] }}</p>
                    <p class="card-text">${{ $producto['precio'] }} CLP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" min="1" value="1">
                            <input type="hidden" name="producto" value="{{ $producto['nombre'] }}">
                            <input type="hidden" name="precio" value="{{ $producto['precio'] }}">
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
