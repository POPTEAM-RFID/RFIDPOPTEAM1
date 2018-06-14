<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Materia;
use Session;
use Input;
use Illuminate\Support\Facades\Redirect;
use Validator;



class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materias = DB::table('materias')->paginate(20);
        return view('materia.index',compact('materias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('materia.create');

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
        $materia = new Materia;
        $materia->claveMateria=$request->claveMateria;
        $materia->nombreMateria=$request->nombreMateria;


        $validator = Validator::make($request->all(), [
            'claveMateria' => 'required',
            'nombreMateria' => 'required',

        ]);

        if ($validator->fails()) {
            //session()->flash('flash_message', 'Validation failed!');
            return  back()->withErrors($validator->messages())->withInput($request->all());
        }
        else{
            $materia->save();
            return Redirect::to('Materias');
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
         $materia = Materia::find($id);
        return view('materia.edit',compact('materia'));
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
        $materia=\App\Materia::find($id);
        $materia->fill($request->all());
        $materia->save();
        Session::flash('messaje','listado de materias');
        return Redirect::to('/Materias');
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
}
