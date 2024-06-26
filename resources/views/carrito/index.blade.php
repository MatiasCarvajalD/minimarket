@extends('layout')

@section('title', 'Carrito')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Carrito de Compras</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cart as $index => $item)
                    <tr>
                        <td>{{ $item['producto'] }}</td>
                        <td>{{ $item['marca'] }}</td>
                        <td>{{ $item['cantidad'] }}</td>
                        <td>${{ $item['precio'] }} CLP</td>
                        <td>${{ $item['cantidad'] * $item['precio'] }} CLP</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="index" value="{{ $index }}">
                                <button type="submit" class="btn btn-danger">Remover</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">El carrito está vacío</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <a href="{{ route('home.index') }}" class="btn btn-primary">Continuar Comprando</a>
</div>
@endsection
