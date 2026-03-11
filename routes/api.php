<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UsuarioController;
use App\Http\Controllers\API\Usuario_TestController;
use App\Http\Controllers\API\Usuario_AlimentosController;
use App\Http\Controllers\API\Tipos_ResultadosController;
use App\Http\Controllers\API\Tipos_DiagnosticoController;
use App\Http\Controllers\API\TestController;
use App\Http\Controllers\API\Respuestas_EvaController;
use App\Http\Controllers\API\PreguntasController;
use App\Http\Controllers\API\EvaluacionController;
use App\Http\Controllers\API\AlimentosController;
use App\Http\Controllers\API\ActividadesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('HDA1/usuario', UsuarioController::class);
Route::apiResource('HDA1/usuario_test', Usuario_TestController::class);
Route::apiResource('HDA1/usuario_alimentos', Usuario_AlimentosController::class);
Route::apiResource('HDA1/tipos_resultados', Tipos_ResultadosController::class);
Route::apiResource('HDA1/tipos_diagnostico', Tipos_DiagnosticoController::class);
Route::apiResource('HDA1/test', TestController::class);
Route::apiResource('HDA1/Respuestas_Eva', Respuestas_EvaController::class);
Route::apiResource('HDA1/Preguntas', PreguntasController::class);
Route::apiResource('HDA1/Evaluacion', EvaluacionController::class);
Route::apiResource('HDA1/Alimentos', AlimentosController::class);
Route::apiResource('HDA1/Actividades', ActividadesController::class);


