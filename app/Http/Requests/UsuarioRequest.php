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
            'NOMBRES' => 'required|max:200',
            'EMAIL' =>  'required|email',
            'ROL' => 'required',
        ];
    }
    public function messages()
    {
    return [
        'NOMBRES.required' => 'El campo nombre es obligatorio',
        'NOMBRES.max' => 'El tamaño del campo nombre se excedio',
        'EMAIL.required' => 'El campo documento es obligatorio',
        'EMAIL.email' => 'El campo email, debe ser un email valido',
        'PASSWORD.required' => 'El campo contraseña es requerido',
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

