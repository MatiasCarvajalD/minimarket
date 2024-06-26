@extends('layout')

@section('title', 'Perfiles')

@section('contenido-principal')
<div class="container mt-5">
    <h1>Perfiles de Usuarios</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{ route('profiles.create') }}" class="btn btn-primary mb-3">Crear Nuevo Perfil</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('profiles.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                    @if(auth()->user()->id !== $user->id)
                        <form action="{{ route('profiles.destroy', $user->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    @else
                        <button class="btn btn-danger" disabled>No puedes eliminarte a ti mismo</button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
