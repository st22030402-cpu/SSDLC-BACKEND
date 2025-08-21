<?php

namespace App\Http\Controllers;

use App\Models\Vacacion;
use Illuminate\Http\Request;

class VacacionController extends Controller
{
    public function index()
    {
        return Vacacion::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'empleado_id' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'motivo' => 'nullable|string',
        ]);

        $vacacion = Vacacion::create([
            'empleado_id' => $request->empleado_id,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'motivo' => $request->motivo,
            'estado' => 'pendiente'
        ]);

        return response()->json($vacacion, 201);
    }
}
