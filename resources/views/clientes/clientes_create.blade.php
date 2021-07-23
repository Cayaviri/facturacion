@extends('layout')

@section('content')

    <form action="{{route('clientes.store')}}" method="POST">
        {{csrf_field()}}
        Cliente: <input type="text" name="idCliente"><br>
        Nombre: <input type="text" name="cliNombre"><br>

        Documento:
        <select name="idDocumento" id="idDocumento">
            @foreach($documentos as $documento)
                <option value="{{$documento->idDocumento}}">{{$documento->docDescripcion}}</option>
            @endforeach
        </select><br>

        Estadocivil:
        <select name="idEstadocivil" id="idEstadocivil">
            @foreach($estadosciviles as $estadocivil)
                <option value="{{$estadocivil->idEstadocivil}}">{{$estadocivil->estDescripcion}}</option>
            @endforeach
        </select><br>

        Sexo:
        <select name="idSexo" id="idSexo">
            @foreach($sexos as $sexo)
                <option value="{{$sexo->idSexo}}">{{$sexo->sexDescripcion}}</option>
            @endforeach
        </select><br>

        Nacimiento: <input type="date" name="cliNacimiento"><br>

        Direccion: <input type="text" name="cliDireccion"><br>

        Telefono: <input type="text" name="cliTelefono"><br>

        Profesion: <input type="text" name="cliProfesion"><br>

        Ocupación: <input type="text" name="cliOcupacion"><br>

        Educación: <input type="text" name="cliEducacion"><br>

        Dependientes: <input type="number" name="cliDependientes"><br>

        Nota: <input type="text" name="cliNota"><br>

        Fecha: <input type="date" name="cliFecha"><br>

        Usuario: <input type="text" name="cliUsuario"><br>

        <button type="submit">Guardar</button>

    </form>



@endsection
