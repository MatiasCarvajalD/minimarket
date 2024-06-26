@extends('layout')

@section('title', 'Productos Más Vendidos')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Productos Más Vendidos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Total Vendido</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->producto }}</td>
                <td>{{ $product->total_cantidad }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
