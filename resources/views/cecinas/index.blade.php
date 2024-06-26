@extends('layout')

@section('title', 'Cecinas')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Cecinas</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($cecinas as $cecinasItem)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/' . $cecinasItem->imagen) }}" class="card-img-top custom-img" alt="{{ $cecinasItem->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $cecinasItem->nombre }}</h5>
                    <p class="card-text">Marca: {{ $cecinasItem->marca }}</p>
                    <p class="card-text">Precio: ${{ $cecinasItem->precio }} CLP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" min="1" value="1">
                            <input type="hidden" name="producto" value="{{ $cecinasItem->nombre }}">
                            <input type="hidden" name="marca" value="{{ $cecinasItem->marca }}">
                            <input type="hidden" name="precio" value="{{ $cecinasItem->precio }}">
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
