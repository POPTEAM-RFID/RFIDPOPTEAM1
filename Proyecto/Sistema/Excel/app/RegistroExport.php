<?php

namespace App;

use App\Registro;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegistroExport extends Model
{
	  public function collection()
    {
        return Registro::all();
    }
 
}
    //

