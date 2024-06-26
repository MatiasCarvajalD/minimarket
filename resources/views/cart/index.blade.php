@extends('layout')

@section('title', 'Carrito')

@section('contenido-principal')
<div class="container mt-5">
    <h1>Tu Carrito de Compras</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($carrito && $carrito->items->isNotEmpty())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carrito->items as $item)
                    <tr>
                        <td>{{ $item->producto->nombre }}</td>
                        <td>{{ $item->cantidad }}</td>
                        <td>{{ $item->producto->precio }} CLP</td>
                        <td>{{ $item->subtotal }} CLP</td>
                        <td>
                            <form action="{{ route('carrito.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="producto_id" value="{{ $item->producto_id }}">
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center">
            <h3>Total: {{ $total }} CLP</h3>
            <form action="{{ route('carrito.checkout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Finalizar Compra</button>
            </form>
        </div>
    @else
        <div class="alert alert-warning">
            Tu carrito está vacío.
        </div>
    @endif
</div>
@endsection
