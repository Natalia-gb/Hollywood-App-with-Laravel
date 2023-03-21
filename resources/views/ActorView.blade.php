<body>
    @extends('/layouts/plantilla')
    @section('header')
    @endsection

    @section('content')
        <div class="d-flex justify-content-center align-items-center">
            <form action="{{route('crear')}}" method="get"><button class="btn btn-primary ms-5 mt-2" type="submit">Crear registro</button></form>
            <form action="{{route('ordenarASC')}}" method="get"><button class="btn btn-info ms-3 mt-2" type="submit">Ordenar por nombre ASC</button></form>
            <form action="{{route('ordenarDESC')}}" method="get"><button class="btn btn-success ms-3 mt-2" type="submit">Ordenar por nombre DESC</button></form>
        </div>
        
            <table class="table table-dark table-hover" style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Nacionality</th>
                        <th scope="col">Date Of Birthday</th>
                        <th scope="col">Years Of Experience</th>
                        <th scope="col" colspan="5">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr @foreach (session('actors') as $actor)>
                        <td><input type="hidden" value="{{$actor->id}}" name="id">{{$actor->id}}</td>
                        <td>{{$actor->name}}</td>
                        <td>{{$actor->nacionality}}</td>
                        <td>{{$actor->date_of_birthday}}</td>
                        <td>{{$actor->years_of_experience}}</td>
                        <td><a href="{{route('editarGET', $actor->id)}}"><button class="btn btn-warning" type="submit">Editar</button></a></td>
                        <td><a href="{{route('verGET', $actor->id)}}"><button class="btn btn-success" type="submit">Ver</button></a></td>
                        <td><form action="{{route('borrar')}}" method="POST">@csrf<input type="hidden" name="id" value="{{$actor->id}}"><button class="btn btn-danger" type="submit">Eliminar</button></form></td>
                    </tr @endforeach>
                </tbody>
            </table>
    @endsection
</body>