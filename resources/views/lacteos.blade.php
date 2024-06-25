@extends('layout')

@section('title', 'Lácteos')

@section('contenido-principal')
<div class="container mt-5">
    <h1 class="mb-4">Lácteos</h1>
    <div class="row">
        <!-- Sidebar de categorías -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Lácteos</a>
                <a href="#" class="list-group-item list-group-item-action">Quesos</a>
                <a href="#" class="list-group-item list-group-item-action">Fiambres</a>
                <a href="#" class="list-group-item list-group-item-action">Leche</a>
                <a href="#" class="list-group-item list-group-item-action">Yogur</a>
                <a href="#" class="list-group-item list-group-item-action">Huevos</a>
                <a href="#" class="list-group-item list-group-item-action">Mantequilla</a>
            </div>
        </div>
        <!-- Fin Sidebar -->

        <!-- Lista de productos -->
        <div class="col-md-9">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Leche Entera -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/leche_entera.jpg') }}" class="card-img-top" alt="Leche Entera">
                        <div class="card-body">
                            <h5 class="card-title">Leche Entera</h5>
                            <div class="mb-3">
                                <label for="lecheEnteraMarca" class="form-label">Marcas:</label>
                                <select id="lecheEnteraMarca" class="form-select">
                                    <option>Colun - $1,200 CLP</option>
                                    <option>Soprole - $1,250 CLP</option>
                                    <option>Loncoleche - $1,150 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Leche Entera -->

                <!-- Leche Descremada -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/leche_descremada.jpg') }}" class="card-img-top" alt="Leche Descremada">
                        <div class="card-body">
                            <h5 class="card-title">Leche Descremada</h5>
                            <div class="mb-3">
                                <label for="lecheDescremadaMarca" class="form-label">Marcas:</label>
                                <select id="lecheDescremadaMarca" class="form-select">
                                    <option>Colun - $1,200 CLP</option>
                                    <option>Soprole - $1,250 CLP</option>
                                    <option>Loncoleche - $1,150 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Leche Descremada -->

                <!-- Leche Semidescremada -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/leche_semidescremada.jpg') }}" class="card-img-top" alt="Leche Semidescremada">
                        <div class="card-body">
                            <h5 class="card-title">Leche Semidescremada</h5>
                            <div class="mb-3">
                                <label for="lecheSemidescremadaMarca" class="form-label">Marcas:</label>
                                <select id="lecheSemidescremadaMarca" class="form-select">
                                    <option>Colun - $1,200 CLP</option>
                                    <option>Soprole - $1,250 CLP</option>
                                    <option>Loncoleche - $1,150 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Leche Semidescremada -->

                <!-- Yogur -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/yogur.jpg') }}" class="card-img-top" alt="Yogur">
                        <div class="card-body">
                            <h5 class="card-title">Yogur</h5>
                            <p class="card-text">Sabores: Natural, Frutilla, Vainilla, Durazno</p>
                            <div class="mb-3">
                                <label for="yogurMarca" class="form-label">Marcas:</label>
                                <select id="yogurMarca" class="form-select">
                                    <option>Colun - $500 CLP</option>
                                    <option>Soprole - $550 CLP</option>
                                    <option>Nestlé - $600 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Yogur -->

                <!-- Queso -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/queso.jpg') }}" class="card-img-top" alt="Queso">
                        <div class="card-body">
                            <h5 class="card-title">Queso</h5>
                            <p class="card-text">Tipos: Queso fresco, Queso mantecoso, Queso gauda, Queso chanco</p>
                            <div class="mb-3">
                                <label for="quesoMarca" class="form-label">Marcas:</label>
                                <select id="quesoMarca" class="form-select">
                                    <option>Queso fresco - Colun - $5,500 CLP</option>
                                    <option>Queso fresco - Soprole - $6,000 CLP</option>
                                    <option>Queso mantecoso - Colun - $6,500 CLP</option>
                                    <option>Queso mantecoso - Soprole - $7,000 CLP</option>
                                    <option>Queso gauda - Colun - $7,500 CLP</option>
                                    <option>Queso gauda - Soprole - $8,000 CLP</option>
                                    <option>Queso chanco - Colun - $6,800 CLP</option>
                                    <option>Queso chanco - Soprole - $7,300 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Queso -->

                <!-- Mantequilla -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/mantequilla.jpg') }}" class="card-img-top" alt="Mantequilla">
                        <div class="card-body">
                            <h5 class="card-title">Mantequilla</h5>
                            <div class="mb-3">
                                <label for="mantequillaMarca" class="form-label">Marcas:</label>
                                <select id="mantequillaMarca" class="form-select">
                                    <option>Colun - $1,800 CLP</option>
                                    <option>Soprole - $1,900 CLP</option>
                                    <option>Los Alpes - $1,850 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Mantequilla -->

                <!-- Crema -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/crema.jpg') }}" class="card-img-top" alt="Crema">
                        <div class="card-body">
                            <h5 class="card-title">Crema</h5>
                            <div class="mb-3">
                                <label for="cremaMarca" class="form-label">Marcas:</label>
                                <select id="cremaMarca" class="form-select">
                                    <option>Colun - $900 CLP</option>
                                    <option>Soprole - $950 CLP</option>
                                    <option>Nestlé - $1,000 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Crema -->

                <!-- Quesillo -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/quesillo.jpg') }}" class="card-img-top" alt="Quesillo">
                        <div class="card-body">
                            <h5 class="card-title">Quesillo</h5>
                            <div class="mb-3">
                                <label for="quesilloMarca" class="form-label">Marcas:</label>
                                <select id="quesilloMarca" class="form-select">
                                    <option>Colun - $1,600 CLP</option>
                                    <option>Soprole - $1,700 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Quesillo -->

                <!-- Leche Condensada -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/leche_condensada.jpg') }}" class="card-img-top" alt="Leche Condensada">
                        <div class="card-body">
                            <h5 class="card-title">Leche Condensada</h5>
                            <div class="mb-3">
                                <label for="lecheCondensadaMarca" class="form-label">Marcas:</label>
                                <select id="lecheCondensadaMarca" class="form-select">
                                    <option>Nestlé - $1,200 CLP</option>
                                    <option>Ideal - $1,150 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Leche Condensada -->

                <!-- Leche Evaporada -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/leche_evaporada.jpg') }}" class="card-img-top" alt="Leche Evaporada">
                        <div class="card-body">
                            <h5 class="card-title">Leche Evaporada</h5>
                            <div class="mb-3">
                                <label for="lecheEvaporadaMarca" class="form-label">Marcas:</label>
                                <select id="lecheEvaporadaMarca" class="form-select">
                                    <option>Nestlé - $1,100 CLP</option>
                                    <option>Ideal - $1,050 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Leche Evaporada -->

                <!-- Queso Rallado -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/queso_rallado.jpg') }}" class="card-img-top" alt="Queso Rallado">
                        <div class="card-body">
                            <h5 class="card-title">Queso Rallado</h5>
                            <div class="mb-3">
                                <label for="quesoRalladoMarca" class="form-label">Marcas:</label>
                                <select id="quesoRalladoMarca" class="form-select">
                                    <option>Soprole - $1,500 CLP</option>
                                    <option>Colun - $1,450 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Queso Rallado -->

                <!-- Postres Lácteos -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/postres_lacteos.jpg') }}" class="card-img-top" alt="Postres Lácteos">
                        <div class="card-body">
                            <h5 class="card-title">Postres Lácteos</h5>
                            <p class="card-text">Tipos: Flan, Manjarate, Leche Asada</p>
                            <div class="mb-3">
                                <label for="postresLacteosMarca" class="form-label">Marcas:</label>
                                <select id="postresLacteosMarca" class="form-select">
                                    <option>Flan - Soprole - $600 CLP</option>
                                    <option>Flan - Nestlé - $650 CLP</option>
                                    <option>Manjarate - Soprole - $700 CLP</option>
                                    <option>Leche Asada - Soprole - $650 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Postres Lácteos -->

                <!-- Manjar -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('images/manjar.jpg') }}" class="card-img-top" alt="Manjar">
                        <div class="card-body">
                            <h5 class="card-title">Manjar</h5>
                            <div class="mb-3">
                                <label for="manjarMarca" class="form-label">Marcas:</label>
                                <select id="manjarMarca" class="form-select">
                                    <option>Colun - $2,000 CLP</option>
                                    <option>Soprole - $2,100 CLP</option>
                                    <option>Nestlé - $2,200 CLP</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn-primary">Agregar</a>
                        </div>
                    </div>
                </div>
                <!-- Fin Manjar -->

            </div>
        </div>
        <!-- Fin Lista de productos -->
    </div>
</div>
@endsection
