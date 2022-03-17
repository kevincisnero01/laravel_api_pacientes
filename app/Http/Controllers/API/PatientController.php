<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Http\Resources\PatientResource;
use App\Http\Requests\SavePatientRequest;
use App\Http\Requests\UpdatePatientRequest;

class PatientController extends Controller
{

    public function index()
    {
        return PatientResource::collection(Patient::all());
    }

    public function store(SavePatientRequest $request)
    {
        return (new PatientResource(Patient::create($request->all())))
        ->additional(['message' => 'Paciente registrado correctamente.']);
    }

    public function show(Patient $patient)
    {
        return new PatientResource($patient);
    }

    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        $patient->update($request->all());
        return (new PatientResource($patient))
        ->additional(['message' => 'Paciente actualizado correctamente.']);
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        return (new PatientResource($patient))
        ->additional(['message' => 'Paciente eliminado correctamente.']);
    }
}
