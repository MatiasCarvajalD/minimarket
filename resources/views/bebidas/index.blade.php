@extends('layout')

@section('title', 'Bebidas')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Bebidas</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($productos as $producto)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/' . $producto['imagen']) }}" class="card-img-top" alt="{{ $producto['nombre'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $producto['nombre'] }}</h5>
                    <div class="mb-3">
                        <label for="tamaño-{{ $loop->index }}" class="form-label">Tamaño</label>
                        <select class="form-select tamaño-select" id="tamaño-{{ $loop->index }}" data-precios='@json($producto['tamaños'])'>
                            @foreach($producto['tamaños'] as $tamaño)
                            <option value="{{ $tamaño['precio'] }}">{{ $tamaño['litros'] }} - ${{ $tamaño['precio'] }} CLP</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="card-text">Precio: <span class="precio">${{ $producto['tamaños'][0]['precio'] }}</span> CLP</p>
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" min="1" value="1">
                            <input type="hidden" name="producto" value="{{ $producto['nombre'] }}">
                            <input type="hidden" name="tamaño" class="tamaño-input" value="{{ $producto['tamaños'][0]['litros'] }}">
                            <input type="hidden" name="precio" class="precio-input" value="{{ $producto['tamaños'][0]['precio'] }}">
                            <button class="btn btn-primary" type="submit">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selects = document.querySelectorAll('.tamaño-select');
        selects.forEach(select => {
            select.addEventListener('change', function () {
                const precios = JSON.parse(this.getAttribute('data-precios'));
                const selectedOption = this.options[this.selectedIndex];
                const precio = selectedOption.value;
                const tamaño = selectedOption.text.split(' - ')[0];

                const cardBody = this.closest('.card-body');
                cardBody.querySelector('.precio').textContent = '$' + precio + ' CLP';
                cardBody.querySelector('.tamaño-input').value = tamaño;
                cardBody.querySelector('.precio-input').value = precio;
            });
        });
    });
</script>
@endsection

