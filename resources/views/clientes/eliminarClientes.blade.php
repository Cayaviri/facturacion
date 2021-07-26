@extends('layouts.plantilla')

@section('contenido')
    <div class="alert alert-danger show">

        <form method="{{route('clientes.destroy', [$cliente])}}" type="POST">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            ¿Desea eliminar el siguiente registro: {{$cliente->cliNombre}}?<br>
            <center>
                <button type="submit" class="btn btn-danger">Aceptar</button>
                <a href="{{route('clientes.index')}}" class="btn btn-secondary">Cancelar</a>
            </center>
        </form>

    </div>



@endsection
