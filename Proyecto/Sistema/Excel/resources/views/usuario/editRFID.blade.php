@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="main-contact">
        <h1 class="head">EDICIÓN DE RFID</h1>
        <h3>Datos personales</h3>
        <div class="row">
            {!!Form::open(['route'=>['usuarios.update',$usuario->no_control], 'method'=>'PUT','files'=>true])!!}
            <form>
                <div class="col-md-12 ">

                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('rfid', 'rfid:')}}
                        </div>
                        <div class="col-md-6">
                            {{Form::text('no_control',$usuario->no_control)}}
                            <?php echo $errors->first('rfid','<span class="label label-danger">:message</span>'); ?>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
                {!!Form::submit('Editar',['class'=>'btn btn-sm btn-success'])!!}{{exec }}

                {!!Form::close()!!}
            </form>
        </div>
    </div>
  </div>-->


@endsection
