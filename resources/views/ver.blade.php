<div class="container-fluid">
    @extends('/layouts/plantilla')
    @section('header')
    @endsection

    @section('content')
        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="card">
                <div class="card-body">
                    <p><b>ID:</b> {{$actor->id}}</p>
                    <p><b>NOMBRE:</b> {{$actor->name}}</p>
                    <p><b>NACIONALIDAD:</b> {{$actor->nacionality}}</p>
                    <p><b>FECHA DE NACIMIENTO:</b> {{$actor->date_of_birthday}}</p>
                    <p><b>AÑOS DE EXPERIENCIA:</b> {{$actor->years_of_experience}}</p>
                </div>
            </div>
        </div>
        <hr />
        <h2 class="d-flex justify-content-center align-items-center">Roles</h2>
        <table class="table table-dark table-hover" style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">Personajes</th>
                        <th scope="col">Minutos en escena</th>
                        <th scope="col" colspan="1">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr @foreach ($roles as $rol)>
                        <td>{{$rol->personaje}}</td>
                        <td>{{$rol->minutosEscena}}</td>
                        <td><a href="{{route('verPeliculas', $rol->idPelicula)}}"><button class="btn btn-success" type="submit">Ver películas</button></a></td>
                    </tr @endforeach>
                </tbody>
            </table>
    @endsection
</div>
