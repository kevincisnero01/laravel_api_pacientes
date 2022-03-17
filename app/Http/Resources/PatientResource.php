<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                'id' => $this->id,
                'nombres' => $this->names,
                'apellidos' => $this->last_names ,
                'edad'  => $this->age,
                'genero'  => $this->gender,
                'cedula'  => $this->cedula,
                'tipo_sangre'  => $this->blood_type,
                'telefono'  => $this->phone,
                'correo'  => $this->email,
                'direccion' => $this->address,
                'fecha_creado' => $this->created_at->format('d-m-Y'),
                'fecha_modificado' => $this->updated_at->format('d-m-Y')
        ];
    }

    public function with($request)
    {
        return [
            'response' => true
        ];
    }

}
