<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        return response()->json(Area::all());
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $area = Area::create($datos);

        return response()->json($area, 201);
    }

    public function show(string $id)
    {
        return response()->json(Area::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        $area = Area::findOrFail($id);

        $datos = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $area->update($datos);

        return response()->json($area);
    }

    public function destroy(string $id)
    {
        $area = Area::findOrFail($id);
        $area->delete();

        return response()->json([
            'mensaje' => 'Area eliminada correctamente'
        ]);
    }
}