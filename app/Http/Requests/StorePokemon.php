<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePokemon extends FormRequest
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
            'file' => 'required|image|max:2048',
            'descripcion' => 'required',
            'tipo_poke' => 'required',
            'region' => 'required',
            'genero' => 'required'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nombre del Pokémon',
            'descripcion'=>'descripcion del Pokémon',
        ];
    }

    public function messages()
    {
        return [
            //'categoria.required'=> 'Ingrsa la categoria del curso'
            'file.required'=> 'La imagen del pokémon es obligatorio'
        ];
    }
}
