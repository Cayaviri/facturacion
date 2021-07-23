@extends('layout')

@section('content')
    <a href="{{route('clientes.create')}}">Nuevo Cliente</a>

    <table>
        <tr>
            <td>Nombre</td>
            <td>Acciones</td>
        </tr>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->cliNombre}}</td>
                <td>
                    <a href="{{route('clientes.edit', [$cliente])}}">Editar</a>
                    <form action="" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>


@endsection
