<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\UtilidadesController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('inicio');
});

/*
Route::get('/suma', function () {
    return view('suma');
});
*/
// sustituyo el anterior para que invoque a la 
// función index (ver SumaController para esta 
// y la siguiente función)
Route::get('/calculadora', [CalculadoraController::class, 'mostrarFormulario']);
Route::post('/hacer-calculo', [CalculadoraController::class, 'calcular']);

// Rutas para Texto
Route::get('/texto', [UtilidadesController::class, 'indexTexto']);
Route::post('/procesar-texto', [UtilidadesController::class, 'procesarTexto']);

// Rutas para Números
Route::get('/numeros', [UtilidadesController::class, 'indexNumeros']);
Route::post('/procesar-numeros', [UtilidadesController::class, 'procesarNumeros']);

Route::get('/productos', [ProductoController::class, 'index']);

