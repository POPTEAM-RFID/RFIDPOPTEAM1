<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    protected $table ='materias';
    protected $primaryKey='id_materia';
    //public $timestamps=true;

    protected $fillable = ['id_materia','claveMateria','nombreMateria'];
}
