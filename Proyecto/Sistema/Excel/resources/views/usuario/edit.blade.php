@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="main-contact">
        <h1 class="head">EDICIÓN DE DATOS</h1>
        <h3>Datos personales</h3>
        <div class="row">
            {!!Form::open(['route'=>['Usuarios.update',$usuario->id_usuario], 'method'=>'PUT','files'=>true])!!}
            <form>
                <div class="col-md-12 ">

                  <div class="row">
                      <div class="col-md-6">
                          {{Form::label('no_control', 'Número de Control:')}}
                      </div>
                      <div class="col-md-6">
                          {{Form::text('no_control',$usuario->no_control)}}
                          <?php echo $errors->first('no_control','<span class="label label-danger">:message</span>'); ?>
                      </div>
                  </div>


                  <div class="row">
                      <div class="col-md-6">
                          {{Form::label('nombre', 'Nombre:')}}
                      </div>
                      <div class="col-md-6">
                          {{Form::text('nombre',$usuario->nombre)}}
                          <?php echo $errors->first('nombre','<span class="label label-danger">:message</span>'); ?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          {{Form::label('apellido', 'apellido:')}}
                      </div>
                      <div class="col-md-6">
                          {{Form::text('apellido',$usuario->apellido)}}
                          <?php echo $errors->first('rfid','<span class="label label-danger">:message</span>'); ?>
                      </div>
                      </div>


                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('tipoUsuario', 'Tipo Usuario:')}}


                          {!! Form::select('tipoUsuario',[
                              'Alumno' => 'Alumno',
                              'Docente' => 'Docente',

                          ],' ',array('class' => 'form-control'))!!}
                            <?php echo $errors->first('rfid','<span class="label label-danger">:message</span>'); ?>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
                {!!Form::submit('Editar',['class'=>'btn btn-sm btn-success'])!!}

         

                <a href="{{ route('updateRFID',$usuario->id_usuario)}}"
                class="dropdown-item">Actualizar</a>


                {!!Form::close()!!}

            



            </form>
        </div>
    </div>
    </div>


@endsection
