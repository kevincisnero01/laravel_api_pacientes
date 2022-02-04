<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'names' => 'required' ,
            'last_names' => 'required' ,
            'age' => 'required' ,
            'gender' => 'required' ,
            'cedula'  => 'required|unique:patients,cedula',
            'blood_type' => 'required' ,
            'phone'  => 'required',
            'email'  => 'required',
            'address' => 'required'
        ];
    }
}
