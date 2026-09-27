<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function index()
    {
        $areas = Area::all();

        return response()->json($areas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $area = Area::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'mensaje' => 'Area creada correctamente',
            'area' => $area
        ], 201);
    }
    
    public function show($id)
    {
        $area = Area::find($id);

        if (!$area) {
            return response()->json([
                'mensaje' => 'Area no encontrada'
            ], 404);
        }

        return response()->json($area);
    }
    
    public function update(Request $request, $id)
    {
        $area = Area::find($id);

        if (!$area) {
            return response()->json([
                'mensaje' => 'Area no encontrada'
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $area->update([
            'name' => $request->name,
        ]);

        return response()->json([
            'mensaje' => 'Area actualizada correctamente',
            'area' => $area
        ]);
    }

    public function destroy($id)
    {
        $area = Area::find($id);

        if (!$area) {
            return response()->json([
                'mensaje' => 'Area no encontrada'
            ], 404);
        }

        $area->delete();

        return response()->json([
            'mensaje' => 'Area eliminada correctamente'
        ]);
    }
}