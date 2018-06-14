<style>
    html {
        font-size: 10pt;
    }

    div {
        font-size: 1.5rem;
    }

    strong {
        font-size: 2rem;
    }
</style>
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif


                    <div class="row">
                        <h1>Registros Docentes</h1>
                        <div class="table-responsive">
                            <table class="table" border="2">
                                <thead>
                                <!-- <td><strong>ID Registro</strong></td> -->
                                <td><strong>No. Control</strong></td>
                                <td><strong>Nombre</strong></td>
                                <td><strong>Apellido</strong></td>

                                <td><strong>RFID</strong></td>
                                <td><strong>Ingreso</strong></td>
                                </thead>
                            @foreach($registros as $registro)
                                    <tbody>
                                  <!-- <td>{{$registro->id_registro}}</td> -->
                                    <td>{{$registro->no_control}}</td>
                                    <td>{{$registro->nombre}}</td>
                                    <td>{{$registro->apellido}}</td>

                                    <td>{{$registro->rfid_registro}}</td>
                                    <td>{{$registro->ingreso}}</td>
                                    </tbody>
                            @endforeach
                            {{ $registros->render() }}
                                </table>
            </div>
        </div>
    </div>

@endsection
