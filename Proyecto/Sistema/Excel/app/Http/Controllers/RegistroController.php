<?php

namespace App\Http\Controllers;


use App\Registro;
use Session;
use Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use vendor\laravel\framework\src\Illuminate\Database\Query\Builder;
use Charts;
use Maatwebsite\Excel\Facades\Excel;

class RegistroController extends Controller
{
	     public function index()
     {
         $registros = DB::table('registros')->paginate(20);

         return view('registro.index',['registros' => $registros]);
     }
	   //  public function index()
    // {
    //     $registros = Registro::all();

    //     return view('registros', compact('registros'));
    // }

    public function excel()
    {        
        /**
         * toma en cuenta que para ver los mismos 
         * datos debemos hacer la misma consulta
        **/

        Excel::create('Regist Excel', function($excel) {
            $excel->sheet('Excel sheet', function($sheet) {

                //otra opción -> $products = Product::select('name')->get();

                $registros = Registro::all();                
                $sheet->fromArray($registros);

                $sheet->setOrientation('landscape');

            });
        })->export('xls');
    }
    public function alumno()
    {
        //$registros = DB::table('registros')->paginate(20);
        $registros = DB::table('registros')->where('tipoUser', 'Alumno')->paginate(20);
        return view('registro.alumno',['registros' => $registros]);
    }

    public function docente()
    {
        //$registros = DB::table('registros')->paginate(20);
        $registros = DB::table('registros')->where('tipoUser', 'Docente')->paginate(20);
        return view('registro.docente',['registros' => $registros]);
    }

 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\registro  $registros
     * @return \Illuminate\Http\Response
     */
    public function show(registro $registros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\registro  $registros
     * @return \Illuminate\Http\Response
     */
    public function edit(registro $registros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registro  $registros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registro $registros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registro  $registros
     * @return \Illuminate\Http\Response
     */
    public function destroy(registro $registros)
    {
        //
    }
}
