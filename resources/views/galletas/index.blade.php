@extends('layout')

@section('title', 'Galletas')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Galletas</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($galletas as $galleta)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/' . $galleta->imagen) }}" class="card-img-top custom-img" alt="{{ $galleta->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $galleta->nombre }}</h5>
                    <p class="card-text">Marca: {{ $galleta->marca }}</p>
                    <p class="card-text">Peso: {{ $galleta->peso }}g</p>
                    <p class="card-text">Precio: ${{ $galleta->precio }} CLP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" min="1" value="1">
                            <input type="hidden" name="producto" value="{{ $galleta->nombre }}">
                            <input type="hidden" name="marca" value="{{ $galleta->marca }}">
                            <input type="hidden" name="precio" value="{{ $galleta->precio }}">
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
