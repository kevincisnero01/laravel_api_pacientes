<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PatientController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pacientes', [PatientController::class, 'index']);
Route::post('/pacientes', [PatientController::class, 'store']);
Route::get('/pacientes/{paciente}',[PatientController::class, 'show']);