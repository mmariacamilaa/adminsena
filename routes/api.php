
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AreaController;
use App\Http\Controllers\Api\TrainingCenterController;
use App\Http\Controllers\Api\ComputerController;


Route::apiResource('areas', AreaController::class);


Route::apiResource('training-centers', TrainingCenterController::class);


Route::apiResource('computers', ComputerController::class);
