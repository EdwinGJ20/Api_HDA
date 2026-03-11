<?php

namespace App\Http\Controllers\API;

use App\Models\Evaluacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvaluacionController extends Controller
{
    // LISTAR TODAS
    public function index()
    {
        // Traemos también los datos del usuario para que el reporte sea completo
        return response()->json(Evaluacion::with('usuario')->get(), 200);
    }

    // CREAR
    public function store(Request $request)
    {
        $evaluacion = Evaluacion::create($request->all());

        return response()->json([
            'message' => 'Evaluación registrada con éxito',
            'data' => $evaluacion
        ], 201);
    }

    // MOSTRAR UNA
    public function show($id)
    {
        return response()->json(
            Evaluacion::with(['usuario', 'diagnostico'])->findOrFail($id)
        );
    }

    // ACTUALIZAR
    public function update(Request $request, $id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->update($request->all());

        return response()->json([
            'message' => 'Evaluación actualizada',
            'data' => $evaluacion
        ]);
    }

    // ELIMINAR
    public function destroy($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->delete();

        return response()->json([
            'message' => 'Evaluación eliminada'
        ]);
    }
}