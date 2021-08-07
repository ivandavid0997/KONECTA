<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use DB;
use Log;
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

    public function guardar(Request $request)
    {
        Log:info($request->all());
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

    public function editar($id)
    {
        $usuario = user::findOrFail($id);
        return view('edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        Log::info($request->all());
        $usuario = user::findOrFail($id);

        $usuario->nombre = $request->NOMBRES ;
        $usuario->documento = $request->IDENTIFICACION ;
        $usuario->rol = $request->ROL;
        $usuario->save();

        return redirect()->route('index');
        //return view('crud.edit', compact('persona'));
        // return redirect('crud')->with('Mensaje','persona MODIFICADA con exito');

    }

    public function eliminar($id)
    {
        user::destroy($id);

        $ruta = "http://127.0.0.1:8000/listado";

        return json_encode(['status' => 200, 'msj' => "cliente eliminado con exito",'ruta' => $ruta]); 
    }





}
