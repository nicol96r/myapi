<?php

namespace App\Http\Controllers;


use App\Models\pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedido = pedido::all();
        return response ()->json($pedido);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator =Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:usuarios,email',
            'direccion' => 'required|string|max:255',

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pedido = pedido::find($id);
        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }
        return response()->json($pedido);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pedido = pedido::find($id);
        if (!$pedido) {
            return response()->json(['message' => 'Pedido no encontrado'], 404);
        }

        $validator = Validator::make($request->all(), [
            
            
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $pedido->update($validator->validated());
        return response()->json($pedido);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pedido = pedido::find($id);
        if (!$pedido) {
            return response()->json(['message' => 'pedido no encontrado'], 404);
        }
        $pedido->delete();
        return response()->json(['message' => 'pedido eliminado con éxito']);
    
    }

}
