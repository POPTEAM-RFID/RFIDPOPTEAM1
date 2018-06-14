@extends('layout')

@section('content')
    <h1 class="page-header">Listado de registroos</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID_Registro</th>
                <th>RFID</th>
                <th>Ingreso</th>
                <th>Salida</th>
                <th>nombre</th>
                <th>Apellido</th>
                <th>No_Control</th>
                <th>Tipo</th>
                <th>Materia</th>
                <th>Tipo Acceso</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($registros as $registro)
            <tr>
                <td>{{ $registro->id_registro }}</td>
                <td>{{ $registro->rfid_registro }}</td>
                <td>{{ $registro->ingreso }}</td>
                <td>{{ $registro->salida }}</td>
                <td>{{ $registro->nombre }}</td>
                <td>{{ $registro->apellido }}</td>
                <td>{{ $registro->no_control }}</td>
                <td>{{ $registro->tipoUser }}</td>
                <td>{{ $registro->materia }}</td>
                <td>{{ $registro->tipoAcceso }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <p>
        <a href="{{ route('registros.excel') }}" class="btn btn-sm btn-primary">
            Descargar registros en Excel
        </a>
    </p>
@endsection