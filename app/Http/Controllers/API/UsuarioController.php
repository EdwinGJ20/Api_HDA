<?php

namespace App\Http\Controllers\API;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    // LISTAR TODOS
    public function index()
    {
        // Nota: Quité el ->with('roles') porque en tu tabla el Rol es un string/campo directo, no una relación externa
        return response()->json(Usuario::all(), 200);
    }

    // CREAR
    public function store(Request $request)
    {
        $usuario = Usuario::create($request->all());

        return response()->json([
            'message' => 'Usuario creado',
            'data' => $usuario
        ], 201);
    }

    // MOSTRAR UNO
    public function show($id)
    {
        return response()->json(
            Usuario::findOrFail($id)
        );
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return response()->json([
            'message' => 'Usuario actualizado',
            'data' => $usuario
        ]);
    }

    // ELIMINAR
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return response()->json([
            'message' => 'Usuario eliminado'
        ]);
    }
}