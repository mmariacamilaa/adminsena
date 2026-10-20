
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        return response()->json(Computer::all(), 200);
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'number' => 'required|string|max:50',
            'brand' => 'required|string|max:100',
        ]);

        $computador = Computer::create($datos);

        return response()->json($computador, 201);
    }

    public function show(string $id)
    {
        $computador = Computer::findOrFail($id);

        return response()->json($computador, 200);
    }

    public function update(Request $request, string $id)
    {
        $computador = Computer::findOrFail($id);

        $datos = $request->validate([
            'number' => 'required|string|max:50',
            'brand' => 'required|string|max:100',
        ]);

        $computador->update($datos);

        return response()->json($computador, 200);
    }

    public function destroy(string $id)
    {
        $computador = Computer::findOrFail($id);
        $computador->delete();

        return response()->json([
            'mensaje' => 'Computador eliminado correctamente'
        ], 200);
    }
}

