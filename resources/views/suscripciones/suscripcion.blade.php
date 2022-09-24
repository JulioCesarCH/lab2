@extends("layout")
@section("titulo","Clientes")
@section("contenido")
    
    <div class="mx-5">
    <h1 class="my-3">Suscripciones</h1>

    <form class="my-3" method="post" action="/suscripciones/guardar">
        <fieldset class="form-group border p-3 d-md-flex col-md-10">
                <div class="col-md-10">
                    @csrf
                    <label for="exampleFormControl1" class="form-label">Seleccione Curso</label>
                    <select class="form-select" name="numero_id">
                        @foreach ($resultados as $numero)
                            <option value={{$numero->id}}>{{$numero->tema}}</option>;
                        @endforeach
                    </select>
                </div>
                
                <div class="col-md-2 mx-3">
                <br>
                <input class="btn btn-primary" type="submit" value="Suscribirse">
                </div>
        </fieldset>
    </form>

    <table class="table table-light table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Tema</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($resultados2 as $publicacion)
        <tr>
        <td>{{$publicacion->id}}</td>
        <td>{{$publicacion->nombre}}</td>
        <td>{{$publicacion->tema}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    
@endsection

@section("scripts")
    <script src="js/scripts.js"></script>
@endsection