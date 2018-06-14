@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="main-contact">
        <h1 class="head">EDICIÓN DE MATERIAS</h1>
        <h3>Materias</h3>
        <div class="row">
            {!!Form::open(['route'=>['Materias.update',$materia->id_materia], 'method'=>'PUT','files'=>true])!!}
            <form>
                <div class="col-md-12 ">

                  <div class="row">
                      <div class="col-md-6">
                          {{Form::label('claveMateria', 'Clave de Materia:')}}
                      </div>
                      <div class="col-md-6">
                          {{Form::text('claveMateria',$materia->claveMateria)}}
                          <?php echo $errors->first('claveMateria','<span class="label label-danger">:message</span>'); ?>
                      </div>
                  </div>


                  <div class="row">
                      <div class="col-md-6">
                          {{Form::label('nombreMateria', 'Nombre Materia:')}}
                      </div>
                      <div class="col-md-6">
                          {{Form::text('nombreMateria',$materia->nombreMateria)}}
                          <?php echo $errors->first('nombreMateria','<span class="label label-danger">:message</span>'); ?>
                      </div>
                  </div>
                  

                          
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
                {!!Form::submit('Editar',['class'=>'btn btn-sm btn-success'])!!}{!!Form::close()!!}

                {!!Form::close()!!}
            </form>
        </div>
    </div>
    </div>


@endsection
