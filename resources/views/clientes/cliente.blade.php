@extends("layout")
@section("titulo","Clientes")
@section("contenido")
    
    <div class="mx-5">
    <h1 class="my-3">Registro de Clientes</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrarCliente"><i class="bi bi-file-earmark-plus"></i> Nuevo</button>
    </div> 
    <br>
    <table class="table table-light table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>DNI</th>
            <th>Nombres y Apellidos</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($resultados as $cliente)
        <tr>
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->dni}}</td>
        <td>{{$cliente->nombre}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="registrarCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>             
                <form action="/clientes/guardar2" method="post">
                   <div class="modal-body">
                    <h5>Registre los datos del Cliente</h5>
                    <br>
                    @csrf
                      DNI: <input class="form-control my-2" type="text" name="dni" placeholder="Ingrese DNI" value="{{ old("dni") }}"><br>
                      @error('dni') <div class="alert alert-danger">{{$message}}</div>@enderror
                      Nombre: <input class="form-control my-2" type="text" name="nombre" placeholder="Ingrese Nombre" value="{{ old("nombre") }}"><br>
                      @error('nombre') <div class="alert alert-danger">{{$message}}</div>@enderror
                      Password: <input class="form-control my-2" type="password" name="password" placeholder="Ingrese password"><br>
                      @error('password') <div class="alert alert-danger">{{$message}}</div>@enderror
                      Confirmar Password: <input class="form-control my-2" type="password" name="password_confirmation" placeholder="Confirme password"><br>
                      @error('password_confirmation') <div class="alert alert-danger">{{$message}}</div>@enderror    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
            </div>
          </div>
    </div>
    
@endsection

@section("scripts")
    <script src="js/scripts.js"></script>
@endsection