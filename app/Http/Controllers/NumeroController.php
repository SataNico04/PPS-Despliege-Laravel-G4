<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Numero;

class NumeroController extends Controller
{
    // Método para obtener todos los números (GET)
    public function index()
    {
        $numeros = Numero::all();
        return response()->json($numeros);
    }

    // Método para añadir un número (POST)
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|integer',
        ]);

        $numero = new Numero();
        $numero->numero = $request->numero;
        $numero->save();

        return response()->json([
            'message' => 'Número añadido con éxito',
            'numero' => $numero
        ], 201);
    }
}