<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AreaController;

Route::get('/hola', function () {
    return response()->json([
        'mensaje' => 'Hola Mundo'
    ]);
});

Route::apiResource('areas', AreaController::class);