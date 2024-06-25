@extends('layout')

@section('title', 'Carrito')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Carrito de Compras</h1>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if(count($cart) > 0)
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $producto => $detalle)
                <tr>
                    <td>{{ $producto }}</td>
                    <td>{{ $detalle['cantidad'] }}</td>
                    <td>${{ $detalle['precio'] }} CLP</td>
                    <td>${{ $detalle['cantidad'] * $detalle['precio'] }} CLP</td>
                    <td>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" name="producto" value="{{ $producto }}">
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay productos en el carrito.</p>
    @endif
</div>
@endsection
