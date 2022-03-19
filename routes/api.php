<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PatientController;
use App\Http\Controllers\AuthenticationController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pacientes', [PatientController::class, 'index']);
Route::post('/pacientes', [PatientController::class, 'store']);
Route::get('/pacientes/{patient}', [PatientController::class, 'show']);
Route::put('/pacientes/{patient}', [PatientController::class, 'update']);
Route::delete('/pacientes/{patient}', [PatientController::class, 'destroy']);

Route::post('registro',[AuthenticationController::class, 'register']);
Route::post('login',[AuthenticationController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function(){

    Route::post('logout',[AuthenticationController::class, 'logout']);
    
});

