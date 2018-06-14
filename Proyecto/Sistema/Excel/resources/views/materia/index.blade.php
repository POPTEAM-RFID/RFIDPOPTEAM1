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
                <h1>Materiass</h1>
                <div class="table-responsive">
                    <table class="table" border="2">
                        <thead>
                        <td><strong>Clave Materia</strong></td>
                        <td><strong>Nombre Materia</strong></td>
                        <td><strong>Editar Materia</strong></td>
                        </thead>
                        @foreach($materias as $materia)
                            <tbody>
                            <td>{{$materia->claveMateria}}</td>
                            <td>{{$materia->nombreMateria}}</td>
                            <td>{!! link_to_route('Materias.edit',$title='Editar',$parameters=$materia->id_materia,
          $attributes=['class'=>'btn btn-primary']) !!}</td>
                            </tbody>
                        @endforeach
                        {{ $materias->render() }}
                    </table>
                </div>
            </div>
        </div>



@endsection
