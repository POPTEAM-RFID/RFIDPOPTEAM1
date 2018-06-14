<?php

namespace App\Http\Controllers;

use App\RegistroExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
 
class RegistroExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new RegistroExport(), 'registros.xlsx');
    }
}