@extends('layouts.app')

@section('content')

nuevo usuario usando el script de python
    <input type ='button' class="btn btn-success"  value = 'Siguiente' onclick="location.href = '{{ route('usuario.create') }}'"/>



@endsection