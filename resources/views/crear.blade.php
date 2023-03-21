<body>
    @extends('/layouts/plantilla')
    @section('header')
    @endsection

    @section('content')
        <h1 class="d-flex justify-content-center align-items-center">Crear un registro</h1>
        <form class="d-flex justify-content-center align-items-center mt-4" action="{{route('actualizadoCrear')}}" method="post">
            @csrf
            <div class="d-block justify-content-center align-items-center">
                @error('name')
                    <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Name</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="name">
                </div>
                @error('nacionality')
                    <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nacionality</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="nacionality">
                </div>
                @error('date_of_birthday')
                    <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Date Of Birthday</span>
                    <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="date_of_birthday">
                </div>
                @error('years_of_experience')
                    <p class="alert alert-danger">{{$message}}</p>
                @enderror
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Years Of Experience</span>
                    <input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="years_of_experience">
                </div>
                <button class="btn btn-primary" type="submit">Registrar</button>
            </div>
        </form>
    @endsection
</body>