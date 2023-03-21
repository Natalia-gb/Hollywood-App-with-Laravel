<div class="container-fluid">
    @extends('/layouts/plantilla')
    @section('header')
    @endsection

    @section('content')
        <h2 class="d-flex justify-content-center align-items-center">Películas</h2>
        <table class="table table-dark table-hover" style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">Id Película</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Duración</th>
                        <th scope="col">Año</th>
                        <th scope="col">Género</th>
                        <!-- <th scope="col" colspan="1">Actions</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$film->idPelicula}}</td>
                        <td>{{$film->nombre}}</td>
                        <td>{{$film->duracion}}</td>
                        <td>{{$film->anio}}</td>
                        <td>{{$film->genero}}</td>
                    </tr>
                </tbody>
            </table>
    @endsection
</div>
