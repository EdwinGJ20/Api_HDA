<?php

namespace App\Http\Controllers\API;

use App\Models\Preguntas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PreguntasController extends Controller
{
    // LISTAR TODAS
    public function index()
    {
        return response()->json(Preguntas::all(), 200);
    }

    // CREAR
    public function store(Request $request)
    {
        $pregunta = Preguntas::create($request->all());

        return response()->json([
            'message' => 'Pregunta creada',
            'data' => $pregunta
        ], 201);
    }

    // MOSTRAR UNA
    public function show($id)
    {
        return response()->json(
            Preguntas::findOrFail($id)
        );
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $pregunta = Preguntas::findOrFail($id);
        $pregunta->update($request->all());

        return response()->json([
            'message' => 'Pregunta actualizada',
            'data' => $pregunta
        ]);
    }

    // ELIMINAR
    public function destroy($id)
    {
        $pregunta = Preguntas::findOrFail($id);
        $pregunta->delete();

        return response()->json([
            'message' => 'Pregunta eliminada'
        ]);
    }
}