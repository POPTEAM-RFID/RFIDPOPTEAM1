@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Nuevo Registro</h3></div>

                    <div class="panel-body">
                        {!!Form::open(['route'=>'Usuarios.store', 'method'=>'POST', 'files' => true])!!}
                        <form class="form-horizontal" method="POST" action="{{ route('Usuarios.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('no_control') ? ' has-error' : '' }}">
                                <label for="no_control" class="col-md-4 control-label">Número Control</label>

                                <div class="col-md-6">
                                    <input id="no_control" type="number" class="form-control" name="no_control" value="{{ old('no_control') }}" required autofocus>

                                    @if ($errors->has('no_control'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('no_control') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label for="nombre" class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                                <label for="apellido" class="col-md-4 control-label">Apellido</label>

                                <div class="col-md-6">
                                    <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus>

                                    @if ($errors->has('apellido'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('tipoUsuario') ? ' has-error' : '' }}">
                                  <label for="tipoUsuario" class="col-md-4 control-label">Tipo Usuario</label>

                                  <div class="col-md-6">

                                    {!! Form::select('tipoUsuario',[
                                        'Alumno' => 'Alumno',
                                        'Docente' => 'Docente',

                                    ],' ',array('class' => 'form-control'))!!}
                                      @if ($errors->has('tipoUsuario'))
                                          <span class="help-block">
                                          <strong>{{ $errors->first('tipoUsuario') }}</strong>
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
