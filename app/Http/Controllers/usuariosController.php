<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class usuariosController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $datos['usuarios']= user::all();

        return view('listar',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacionCampos = [
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'ciudad' => 'required|string|max:100',
        ];
        $Mensaje= ["required" => ' :attribute es requerido'];

        $this->validate($request,$validacionCampos,$Mensaje);

        //$datosPersona=request()->all();

        $datosPersona=request()->except('_token');

        Persona::insert($datosPersona);

        return redirect('crud')->with('Mensaje','persona AGREGADA con exito'); 
        //return response()->json($datosPersona);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::findOrFail($id);

        return view('crud.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosPersona=request()->except(['_token', '_method']);
        Persona::where('id','=',$id)->update($datosPersona);

        //$persona = Persona::findOrFail($id);
        //return view('crud.edit', compact('persona'));
         return redirect('crud')->with('Mensaje','persona MODIFICADA con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Persona::destroy($id);

        return redirect('crud')->with('Mensaje','persona ELIMINADA con exito');    
    }





}
