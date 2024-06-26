@extends('layout')

@section('title', 'Ingresos Totales por Categoría')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Ingresos Totales por Categoría</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Categoría</th>
                <th>Ingreso Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->categoria }}</td>
                <td>${{ $category->total_income }} CLP</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
