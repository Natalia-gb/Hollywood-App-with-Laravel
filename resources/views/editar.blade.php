<body>
    <container-fluid>
        @extends('/layouts/plantilla')
        @section('header')
        @endsection

        @section('content')
            <h1 class="d-flex justify-content-center align-items-center">Editar actor</h1>
            <form class="d-flex justify-content-center align-items-center mt-4" action="{{route('update')}}" method="post">
                @csrf
                <div class="d-block justify-content-center align-items-center" @if ($idActor)>
                    @error('id')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">ID</span>
                        <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{$idActor->id}}" name="id">
                    </div>
                    @error('name')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{$idActor->name}}" name="name">
                    </div>
                    @error('nacionality')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nacionality</span>
                        <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{$idActor->nacionality}}" name="nacionality">
                    </div>
                    @error('date_of_birthday')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Date Of Birthday</span>
                        <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{$idActor->date_of_birthday}}" name="date_of_birthday">
                    </div>
                    @error('years_of_experience')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Years Of Experience</span>
                        <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="{{$idActor->years_of_experience}}" name="years_of_experience">
                    </div>
                    <form action="{{route('update')}}" method="post">@csrf<input type='hidden' name="id" value="{{$idActor->id}}"><button class="btn btn-primary" type="submit" value="{{$idActor->id}}">Guardar cambios</button></form>
                </div @endif>
            </form>
        @endsection
    </container-fluid>
</body>