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
                <h1>Usuarios</h1>
                <div class="table-responsive">
                    <table class="table" border="2">
                        <thead>
                        <td><strong>No Control</strong></td>
                        <td><strong>RFID</strong></td>
                        <td><strong>Nombre</strong></td>
                        <td><strong>Apellido</strong></td>
                        <td><strong>Tipo Usuario</strong></td>
                        <td><strong>Editar RFID</strong></td>
                        </thead>
                        @foreach($usuarios as $usuario)
                            <tbody>
                            <td>{{$usuario->no_control}}</td>
                            <td>{{$usuario->rfid}}</td>
                            <td>{{$usuario->nombre}}</td>
                            <td>{{$usuario->apellido}}</td>
                            <td>{{$usuario->tipoUsuario}}</td>
                            <td>{!! link_to_route('Usuarios.edit',$title='Editar',$parameters=$usuario->id_usuario,
          $attributes=['class'=>'btn btn-primary']) !!}


                            </td>
                            </tbody>
                        @endforeach
                        {{ $usuarios->render() }}
                    </table>
                </div>
            </div>
        </div>



@endsection
