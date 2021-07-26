@extends('layouts.plantilla')

@section('contenido')

    <form action="{{route('clientes.update', [$cliente])}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <div class="row">

            <div class="form-group col-md-4">
                <label for="idCliente">Cliente</label>
                <input type="text" name="idCliente" id="idCliente" class="form-control"
                       placeholder="Número de CI, NIT u otro" value="{{ $cliente->idCliente }}" autofocus>

            </div>

            <div class="form-group col-md-4">
                <label for="cliNombre">Nombre</label>
                <input type="text" name="cliNombre" id="cliNombre" class="form-control" value="{{$cliente->cliNombre}}">
            </div>

            <div class="form-group col-md-4">
                <label for="idDocumento">Documento</label>
                <select name="idDocumento" id="idDocumento" class="form-control">
                    @foreach($documentos as $documento)

                        @if($cliente->idDocumento == $documento->idDocumento)
                            <option value="{{$documento->idDocumento}}" selected>{{$documento->docDescripcion}}</option>
                        @else
                            <option value="{{$documento->idDocumento}}">{{$documento->docDescripcion}}</option>
                        @endif

                    @endforeach
                </select>
            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-4">
                <label for="idEstadocivil">Estado civil</label>
                <select name="idEstadocivil" id="idEstadocivil" class="form-control">
                    @foreach($estadosciviles as $estadocivil)

                        @if($cliente->idEstadocivil == $estadocivil->idEstadocivil)
                            <option value="{{$estadocivil->idEstadocivil}}"
                                    selected>{{$estadocivil->estDescripcion}}</option>
                        @else
                            <option value="{{$estadocivil->idEstadocivil}}">{{$estadocivil->estDescripcion}}</option>
                        @endif

                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="idSexo">Sexo</label>
                <select name="idSexo" id="idSexo" class="form-control" class="form-control">
                    @foreach($sexos as $sexo)

                        @if($cliente->idSexo == $sexo->idSexo)
                            <option value="{{$sexo->idSexo}}" selected>{{$sexo->sexDescripcion}}</option>
                        @else
                            <option value="{{$sexo->idSexo}}">{{$sexo->sexDescripcion}}</option>
                        @endif

                    @endforeach
                </select>
            </div>


            <div class="form-group col-md-4">
                <label for="cliNacimiento">Nacimiento</label>
                <input type="date" name="cliNacimiento" id="cliNacimiento" class="form-control" value="{{$cliente->cliNacimiento}}">
            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-4">
                <label for="cliDireccion">Dirección</label>
                <input type="text" name="cliDireccion" id="cliDireccion" class="form-control" value="{{$cliente->cliDireccion}}">
            </div>

            <div class="form-group col-md-4">
                <label for="cliTelefono">Teléfono</label>
                <input type="text" name="cliTelefono" id="cliTelefono" class="form-control" value="{{$cliente->cliTelefono}}">
            </div>

            <div class="form-group col-md-4">
                <label for="cliProfesion">Profesión</label>
                <input type="text" name="cliProfesion" id="cliProfesion" class="form-control" value="{{$cliente->cliProfesion}}">
            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-4">
                <label for="cliOcupacion">Ocupación</label>
                <input type="text" name="cliOcupacion" id="cliOcupacion" class="form-control" value="{{$cliente->cliOcupacion}}">
            </div>

            <div class="form-group col-md-4">
                <label for="cliEducacion">Educación</label>
                <input type="text" name="cliEducacion" id="cliEducacion" class="form-control" value="{{$cliente->cliEducacion}}">
            </div>

            <div class="form-group col-md-4">
                <label for="cliDependientes">Dependientes</label>
                <input type="number" name="cliDependientes" id="cliDependientes" class="form-control" value="{{$cliente->cliDependientes}}">
            </div>

        </div>

        <div class="row">

            <div class="form-group col-md-4">
                <label for="cliNota">Nota</label>
                <input type="text" name="cliNota" id="cliNota" class="form-control" value="{{$cliente->cliNota}}">
            </div>

            <div class="form-group col-md-4">
                <label for="cliFecha">Fecha</label>
                <input type="date" name="cliFecha" id="cliFecha" class="form-control" value="{{$cliente->cliFecha}}">
            </div>

        </div>

        <!---Usuario: <input type="text" name="cliUsuario" value="{{$cliente->cliUsuario}}"><br>--->

        <center>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('clientes.index')}}" class="btn btn-secondary">Cancelar</a>
        </center>

    </form>

@endsection