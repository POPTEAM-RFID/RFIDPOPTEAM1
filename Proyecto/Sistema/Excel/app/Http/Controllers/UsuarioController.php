<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Session;
use Input;
use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;
use vendor\laravel\framework\src\Illuminate\Database\Query\Builder;
use Validator;
use Illuminate\Support\Facades\Redirect;


class UsuarioController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
    {
        //
        $usuarios = DB::table('usuarios')->paginate(20);
        return view('usuario.index',compact('usuarios'));
      //  return view('usuario.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('usuario.create');
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
        $usuario = new Usuario;
        $usuario->no_control=$request->no_control;
        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->tipoUsuario=$request->tipoUsuario;


        $validator = Validator::make($request->all(), [
            'no_control' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'tipoUsuario' => 'required',
        ]);

        if ($validator->fails()) {
            //session()->flash('flash_message', 'Validation failed!');
            return  back()->withErrors($validator->messages())->withInput($request->all());
        }
        else{
            $usuario->save();
            return Redirect::to('Usuarios');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario = Usuario::find($id);
        //dd($student);
        $tipoUsuario=Usuario::all()->pluck('tipoUsuario', 'tipoUsuario');
        return view('usuario.edit',compact('usuario'),['tipoUsuario'=>$tipoUsuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $usuario=\App\Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        Session::flash('messaje','listado de ventas');
        return Redirect::to('/Usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function updateRFID()
    {
        //$usuario = Usuario::find($id);
        //$success = (string)$id;
        //$usuario = DB::table('usuarios')->where('no_control', "$id");
        //$no_control = $usuario["no_control"];

   
        //$script = "https://localhost:8000/scripts/script.py ";
       //$escaped_cmd='python updateRFID.py 1404000';
//$salida = array();
//exec($escaped_cmd, $salida);
//return $salida;

        return view('Python.updateRFID');
    
        //$chido = "python " . $script;
        //shell_exec($chido);
        //shell_exec("notepad.exe");
        //shell_exec($chido);
        //return Redirect::to ("/Usuarios");
     
}
}
    //

