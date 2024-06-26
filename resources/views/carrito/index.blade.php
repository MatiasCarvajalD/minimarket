@extends('layout')

@section('contenido-principal')
<div class="container mt-4">
    <h1 class="text-center">Carrito de Compras</h1>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

    @if(!empty($cart))
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $details)
                    <tr>
                        <td>{{ $details['nombre'] }}</td>
                        <td>{{ $details['precio'] }} CLP</td>
                        <td>{{ $details['cantidad'] }}</td>
                        <td>{{ $details['precio'] * $details['cantidad'] }} CLP</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="producto_id" value="{{ $id }}">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center">No hay productos en el carrito</p>
    @endif
</div>
@endsection
