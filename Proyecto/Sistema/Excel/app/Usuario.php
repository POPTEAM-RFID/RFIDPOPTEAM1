<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table ='usuarios';
    protected $primaryKey='id_usuario';
    //public $timestamps=true;

    protected $fillable = ['id_usuario','no_control','nombre','apellido','tipoUsuario'];
}
