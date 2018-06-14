@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Nuevo Registro</h3></div>

                    <div class="panel-body">
                        {!!Form::open(['route'=>'Materias.store', 'method'=>'POST', 'files' => true])!!}
                        <form class="form-horizontal" method="POST" action="{{ route('Materias.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('claveMateria') ? ' has-error' : '' }}">
                                <label for="claveMateria" class="col-md-4 control-label">Número Control</label>

                                <div class="col-md-6">
                                    <input id="claveMateria" type="number" class="form-control" name="claveMateria" value="{{ old('claveMateria') }}" required autofocus>

                                    @if ($errors->has('no_control'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('claveMateria') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nombreMateria') ? ' has-error' : '' }}">
                                <label for="nombreMateria" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input id="nombreMateria" type="text" class="form-control" name="nombreMateria" value="{{ old('nombreMateria') }}" required autofocus>

                                    @if ($errors->has('nameMateria'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nameMateria') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>






                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
