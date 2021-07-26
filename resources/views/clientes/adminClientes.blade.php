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
                    <a href="{{route('clientes.edit', [$cliente])}}" class="btn btn-primary">Editar</a>
                    <a href="{{route('clientes.show', [$cliente])}}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>


@endsection
