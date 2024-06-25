@extends('layout')

@section('title', 'Inicio')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Bienvenido a Minimarket Carolina</h1>
    <div class="row">
        <div class="col-12">
            <h2 class="category-title">Categorías</h2>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="{{ asset('images/cecinas.jpg') }}" class="card-img-top" alt="Cecinas">
                <div class="card-body">
                    <h5 class="card-title">Cecinas</h5>
                    <a href="{{ route('cecinas') }}" class="btn btn-primary">Ver productos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="{{ asset('images/bebidas.jpg') }}" class="card-img-top" alt="Bebidas">
                <div class="card-body">
                    <h5 class="card-title">Bebidas</h5>
                    <a href="{{ route('bebidas') }}" class="btn btn-primary">Ver productos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="{{ asset('images/galletas.jpg') }}" class="card-img-top" alt="Galletas">
                <div class="card-body">
                    <h5 class="card-title">Galletas</h5>
                    <a href="{{ route('galletas') }}" class="btn btn-primary">Ver productos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="{{ asset('images/lacteos.jpg') }}" class="card-img-top" alt="Lácteos">
                <div class="card-body">
                    <h5 class="card-title">Lácteos</h5>
                    <a href="{{ route('lacteos') }}" class="btn btn-primary">Ver productos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="{{ asset('images/otros.jpg') }}" class="card-img-top" alt="Otros">
                <div class="card-body">
                    <h5 class="card-title">Otros</h5>
                    <a href="{{ route('otros') }}" class="btn btn-primary">Ver productos</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card product-card">
                <img src="{{ asset('images/carrito.jpg') }}" class="card-img-top" alt="Carrito">
                <div class="card-body">
                    <h5 class="card-title">Carrito</h5>
                    <a href="{{ route('carrito') }}" class="btn btn-primary">Ver productos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
