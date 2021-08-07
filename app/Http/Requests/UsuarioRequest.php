<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UsuarioRequest extends FormRequest
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
            'NOMBRES' => 'required|max:2',
            'IDENTIFICACION' =>  'required|max:15',
            'ROL' => 'required',
        ];
    }
    public function messages()
    {
    return [
        'NOMBRES.required' => 'El campo nombre es obligatorio',
        'NOMBRES.max' => 'El tamaño del campo nombre se excedio',
        'IDENTIFICACION.required' => 'El campo documento es obligatorio',
        'ROL.required' => 'el ROL es obligatorio',
        ];
    }

    public function validate() {
        $instance = $this->getValidatorInstance();
        if ($instance->fails()) {
            throw new HttpResponseException(response()->json($instance->errors(), 422));
        }
    }
}

