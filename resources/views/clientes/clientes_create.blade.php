@extends('layouts.plantilla')

@section('contenido')

    <form action="{{route('clientes.store')}}" method="POST">
        {{csrf_field()}}
        <div class="row">

            <div class="form-group col-md-4">
                <label for="idClientes">Cliente</label>
                <input type="text" name="idCliente" id="idClientes" class="form-control"
                       placeholder="Número de CI, NIT u otro" autofocus>

            </div>

            <div class="form-group col-md-4">
                <label for="cliNombre">Nombre</label>
                <input type="text" name="cliNombre" id="cliNombre" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label for="idDocumento">Documento</label>
                <select name="idDocumento" id="idDocumento" class="form-control">
                    @foreach($documentos as $documento)
                        <option value="{{$documento->idDocumento}}">{{$documento->docDescripcion}}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-4">
                <label for="idEstadocivil">Estado civil</label>
                <select name="idEstadocivil" id="idEstadocivil" class="form-control">
                    @foreach($estadosciviles as $estadocivil)
                        <option value="{{$estadocivil->idEstadocivil}}">{{$estadocivil->estDescripcion}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="idSexo">Sexo</label>
                <select name="idSexo" id="idSexo" class="form-control" class="form-control">
                    @foreach($sexos as $sexo)
                        <option value="{{$sexo->idSexo}}">{{$sexo->sexDescripcion}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group col-md-4">
                <label for="cliNacimiento">Nacimiento</label>
                <input type="date" name="cliNacimiento" id="cliNacimiento" class="form-control">
            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-4">
                <label for="cliDireccion">Dirección</label>
                <input type="text" name="cliDireccion" id="cliDireccion" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label for="cliTelefono">Teléfono</label>
                <input type="text" name="cliTelefono" id="cliTelefono" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label for="cliProfesion">Profesión</label>
                <input type="text" name="cliProfesion" id="cliProfesion" class="form-control">
            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-4">
                <label for="cliOcupacion">Ocupación</label>
                <input type="text" name="cliOcupacion" id="cliOcupacion" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label for="cliEducacion">Educación</label>
                <input type="text" name="cliEducacion" id="cliEducacion" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label for="cliDependientes">Dependientes</label>
                <input type="number" name="cliDependientes" id="cliDependientes" class="form-control">
            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-4">
                <label for="cliNota">Nota</label>
                <input type="text" name="cliNota" id="cliNota" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label for="cliFecha">Fecha</label>
                <input type="date" name="cliFecha" id="cliFecha" class="form-control">
            </div>

        </div>

        <!---Usuario: <input type="text" name="cliUsuario"><br>--->

        <center>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('clientes.index')}}" class="btn btn-secondary">Cancelar</a>
        </center>

    </form>

@endsection
