@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="main-contact">
        <h1 class="head">EDICIÓN DE RFID</h1>
        <h3>Datos de RFID</h3>

<form action="http://localhost/launcher.php" method="post">
 <input type="hidde" name="no_control" value="1404000" />
 
<br>
<br>
 <input type="submit" value="Actualizar RFID" />
</form>

@endsection