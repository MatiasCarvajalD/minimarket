@extends('layout')

@section('title', 'Usuarios Nuevos Último Mes')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Usuarios Nuevos Último Mes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
