@extends("layout")
@section("titulo","Registrar Clientes")
@section("contenido")
    <div class="mx-5">
    <h1 class="my-3">Formulario de Registro de Cliente</h1>
    <form method="post" action="/clientes/guardar">
        <fieldset class="form-group border p-3 col-md-4">
                <div class="form-group col-md-11">
                @csrf
                DNI: <input class="form-control my-2" type="text" name="dni" placeholder="Ingrese DNI" value="{{ old("dni") }}"><br>
                @error('dni') <div class="alert alert-danger">{{$message}}</div>@enderror
                Nombre: <input class="form-control my-2" type="text" name="nombre" placeholder="Ingrese Nombre" value="{{ old("nombre") }}"><br>
                @error('nombre') <div class="alert alert-danger">{{$message}}</div>@enderror
                Password: <input class="form-control my-2" type="password" name="password" placeholder="Ingrese password"><br>
                @error('password') <div class="alert alert-danger">{{$message}}</div>@enderror
                Confirmar Password: <input class="form-control my-2" type="password" name="password_confirmation" placeholder="Confirme password"><br>
                @error('password_confirmation') <div class="alert alert-danger">{{$message}}</div>@enderror
                <input class="btn btn-primary" type="submit" value="Guardar">
                </div>
        </fieldset>
    </form>
    </div>
@endsection