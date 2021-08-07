<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use DB;
use Redirect;

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

    public function guardar(Request $request)
    {

       
        try {
            $user = new user;
            
            $user->nombre = $request->NOMBRES;
            $user->documento = $request->IDENTIFICACION;
            $user->rol = $request->ROL;
            $user->save();
            $ruta = "http://127.0.0.1:8000/listado";

            return json_encode(['status' => 200, 'msj' => "cliente creado",'ruta' => $ruta]);

        } catch (\Exception $e) {
            DB::rollBack();
            $msj_error = $e->getMessage();
            return Redirect::to("listado/")->withErrors([$msj_error]);
        }
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
    public function eliminar($id)
    {
        user::destroy($id);

        $ruta = "http://127.0.0.1:8000/listado";

        return json_encode(['status' => 200, 'msj' => "cliente eliminado con exito",'ruta' => $ruta]); 
    }





}
