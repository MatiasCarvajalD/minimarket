@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<h1 class="mb-4">Finalizar Compra</h1>

@if($carrito->isEmpty())
    <div class="alert alert-warning">
        Tu carrito está vacío. <a href="{{ route('minimarket.index') }}">Empieza a comprar aquí</a>.
    </div>
@else
    <h2>Resumen de tu Compra</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carrito as $detalle)
                <tr>
                    <td>{{ $detalle->producto->nom_producto }}</td>
                    <td>{{ $detalle->cantidad }}</td>
                    <td>${{ number_format($detalle->producto->precio, 0, ',', '.') }}</td>
                    <td>${{ number_format($detalle->producto->precio * $detalle->cantidad, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Total: ${{ number_format($total, 0, ',', '.') }}</h3>

    <form action="{{ route('checkout.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="direccion">Dirección de Entrega</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="metodo_pago">Método de Pago</label>
            <select name="metodo_pago" id="metodo_pago" class="form-control" required>
                <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                <option value="transferencia">Transferencia Bancaria</option>
                <option value="efectivo">Pago en Efectivo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success btn-lg w-100 mt-3">Confirmar Compra</button>
    </form>
@endif
@endsection
