<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilidadesController extends Controller
{
// --- ZONA DE TEXTO ---

    // 1. Mostrar el formulario de texto
    public function indexTexto() {
        return view('utilidades.texto');
    }

    // 2. Procesar el texto
    public function procesarTexto(Request $request) {
        $request->validate(['cadena' => 'required']); // Validamos que escriban algo

        $textoOriginal = $request->input('cadena');
        
        // Algoritmo: Convertir a mayúsculas y contar letras
        $textoMayus = strtoupper($textoOriginal);
        $longitud = strlen($textoOriginal);

        return view('utilidades.texto', [
            'resultado' => "El texto en mayúsculas es: $textoMayus. Tiene $longitud caracteres."
        ]);
    }

    // --- ZONA DE NÚMEROS ---

    // 3. Mostrar el formulario de números
    public function indexNumeros() {
        return view('utilidades.numeros');
    }

    // 4. Procesar el número
    public function procesarNumeros(Request $request) {
        $request->validate(['numero' => 'required|numeric']);

        $n = $request->input('numero');

        // Algoritmo: Comprobar si es Par o Impar
        if ($n % 2 == 0) {
            $mensaje = "El número $n es PAR.";
        } else {
            $mensaje = "El número $n es IMPAR.";
        }

        return view('utilidades.numeros', ['resultado' => $mensaje]);
    }
}
