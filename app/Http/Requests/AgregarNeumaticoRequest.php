<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgregarNeumaticoRequest extends FormRequest
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

            'ancho' => 'required',

            'perfil' => 'required',

            'aro' => 'required',

            'idMarcaNeumatico' => 'required',

            'idSucursal' => 'required',

            'precioVenta' => 'required',

            'estado' => 'required', 

            'stock' => 'required'        
        ];
    }
}