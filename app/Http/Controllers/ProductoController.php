<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto; 

class ProductoController extends Controller
{
    public function index()
    {
        // Pedir todos los productos a la BD
        $todosLosProductos = Producto::all();

        // Mandarlos a la vista
        return view('productos.index', compact('todosLosProductos'));
    }
}
