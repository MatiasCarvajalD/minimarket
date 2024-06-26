@extends('layout')

@section('title', 'Home')

@section('contenido-principal')
<div class="container mt-5">
    <h1>Bienvenido a Minimarket</h1>
    
    <!-- Productos Destacados -->
    <section>
        <h2>Productos Destacados</h2>
        <div class="row">
            @foreach($productosDestacados as $producto)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <p class="card-text">{{ $producto->precio }} CLP</p>
                        <form action="{{ route('carrito.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                            <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Categorías Populares -->
    <section>
        <h2>Categorías Populares</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <a href="{{ route('lacteos.index') }}" class="btn btn-lg btn-secondary w-100">Lácteos</a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('cecinas.index') }}" class="btn btn-lg btn-secondary w-100">Cecinas</a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('bebidas.index') }}" class="btn btn-lg btn-secondary w-100">Bebidas</a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="{{ route('galletas.index') }}" class="btn btn-lg btn-secondary w-100">Galletas</a>
            </div>
        </div>
    </section>

    <!-- Ofertas Especiales -->
    <section>
        <h2>Ofertas Especiales</h2>
        <div class="row">
            @foreach($ofertas as $oferta)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('images/' . $oferta->imagen) }}" class="card-img-top" alt="{{ $oferta->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $oferta->nombre }}</h5>
                        <p class="card-text">{{ $oferta->precio }} CLP</p>
                        <form action="{{ route('carrito.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="producto_id" value="{{ $oferta->id }}">
                            <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection
