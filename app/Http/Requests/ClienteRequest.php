<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClienteRequest extends FormRequest
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

    public function rules()
    {
        return [
            'NOMBRES' => 'required|max:50',
            'IDENTIFICACION' =>  'required|max:15',
            'DIRECCION' => 'required',
            'EMAIL' => 'required|email'
        ];
    }
    public function messages()
    {
    return [
        'NOMBRES.required' => 'El campo nombre es obligatorio',
        'NOMBRES.max' => 'El tamaño del campo nombre se excedio',
        'IDENTIFICACION.required' => 'El campo documento es obligatorio',
        'IDENTIFICACION.max' => 'El campo IDENTIFICACION no puede ser mayor a 15',
        'DIRECCION.required' => 'la DIRECCION es obligatorio',
        'EMAIL.required' => 'El EMAIL es obligatorio',
        'EMAIL.email' => 'El EMAIL debe ser tipo email',


        ];
    }

    public function validate() {
        $instance = $this->getValidatorInstance();
        if ($instance->fails()) {
            throw new HttpResponseException(response()->json($instance->errors(), 422));
        }
    }
}
