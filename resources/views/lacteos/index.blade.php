@extends('layout')

@section('title', 'Lácteos')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Lácteos</h1>
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                @foreach($categorias as $key => $categoria)
                <a href="{{ route('lacteos.categoria', $key) }}" class="list-group-item list-group-item-action">{{ $categoria }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-md-9">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($categorias as $key => $categoria)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/' . $key . '.jpg') }}" class="card-img-top" alt="{{ $categoria }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $categoria }}</h5>
                            <a href="{{ route('lacteos.categoria', $key) }}" class="btn btn-primary">Ver productos</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
