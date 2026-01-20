<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    // Muestra la vista del formulario
    public function mostrarFormulario()
    {
        return view('suma');
    }

    // Recibe los datos y calcula según la operación elegida
    public function calcular(Request $request)
    {
        // 1. Validamos los datos (números y operación obligatoria)
        $request->validate([
            'numero1' => 'required|numeric',
            'numero2' => 'required|numeric',
            'operacion' => 'required'
        ]);

        $n1 = $request->input('numero1');
        $n2 = $request->input('numero2');
        $op = $request->input('operacion');
        $resultado = 0;

        // 2. Switch para elegir la operación
        switch ($op) {
            case '+':
                $resultado = $n1 + $n2;
                break;
            case '-':
                $resultado = $n1 - $n2;
                break;
            case '*':
                $resultado = $n1 * $n2;
                break;
            case '/':
                if ($n2 == 0) {
                    // Si intenta dividir por cero, retornamos error
                    return view('suma', ['error' => 'No se puede dividir por cero']);
                }
                $resultado = $n1 / $n2;
                break;
            default:
                return view('suma', ['error' => 'Operación no válida']);
        }

        // 3. Retornamos la vista con el resultado calculado
        return view('suma', ['resultado' => $resultado]);
    }
}
