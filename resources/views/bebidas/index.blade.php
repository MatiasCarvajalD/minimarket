@extends('layout')

@section('title', 'Bebidas')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Bebidas</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($bebidas as $bebida)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/' . $bebida->imagen) }}" class="card-img-top custom-img" alt="{{ $bebida->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $bebida->nombre }} ({{ $bebida->litros }})</h5>
                    <p class="card-text">Precio: ${{ $bebida->precio }} CLP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" min="1" value="1">
                            <input type="hidden" name="producto" value="{{ $bebida->nombre }}">
                            <input type="hidden" name="litros" value="{{ $bebida->litros }}">
                            <input type="hidden" name="precio" value="{{ $bebida->precio }}">
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
