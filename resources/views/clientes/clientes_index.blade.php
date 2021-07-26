@extends('layouts.plantilla')

@section('contenido')

    <h1>Clientes</h1><br>

    <a href="{{route('clientes.create')}}" class="btn btn-primary">Nuevo</a><br><br>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>CI/NIT</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->idCliente}}</td>
                <td>{{$cliente->cliNombre}}</td>
                <td>

                    <form action="{{ route('clientes.destroy', [$cliente])}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <a href="{{route('clientes.edit', [$cliente])}}" class="btn btn-primary">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>


@endsection
