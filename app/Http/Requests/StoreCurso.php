<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() //logica, login 
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */ //tiene dos metodos 
    public function rules() //regla de validación
    {
        return [
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nombre del curos',
            'descripcion'=>'descripcion del curso',
        ];
    }

    public function messages()
    {
        return [
            'categoria.required'=> 'Ingrsa la categoria del curso'
        ];
    }
}
