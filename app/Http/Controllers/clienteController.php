<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use DB;
use Log;
use Redirect;

class clienteController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $datos['clientes']= cliente::all();

        return view('clientes.listar',$datos);
    }

    public function guardar(Request $request)
    {
        Log:info($request->all());
        try {
            
            $cliente = new cliente;
            
            $cliente->nombre = $request->NOMBRES;
            $cliente->documento = $request->IDENTIFICACION;
            $cliente->direccion = $request->DIRECCION;
            $cliente->email = $request->EMAIL;
            $cliente->save();
            $ruta = route('index.clientes');

            return json_encode(['status' => 200, 'msj' => "cliente creado",'ruta' => $ruta]);

        } catch (\Exception $e) {
            DB::rollBack();
            $msj_error = $e->getMessage();
            return Redirect::to("listado/")->withErrors([$msj_error]);
        }
    }

    public function editar($id)
    {
        $cliente = cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        Log::info($request->all());
        $cliente = cliente::findOrFail($id);

        $cliente->nombre = $request->NOMBRES ;
        $cliente->documento = $request->IDENTIFICACION ;
        $cliente->direccion = $request->DIRECCION;
        $cliente->email = $request->EMAIL;
        $cliente->save();

        return redirect()->route('index.clientes');

    }

    public function eliminar($id)
    {
        cliente::destroy($id);

        $ruta = route('index.clientes');

        return json_encode(['status' => 200, 'msj' => "cliente eliminado con exito",'ruta' => $ruta]); 
    }



}
