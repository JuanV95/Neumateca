<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgregarRepuestoRequest extends FormRequest
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

            'idSucursal' => 'required',

            'idCategoria' => 'required',

            'idModeloRepuesto' => 'required',

            'idMarcaRepuesto' => 'required',

            'descripcion' => 'required',

            'precioVenta' => 'required',

            'stock' => 'required',  

            'estado' => 'required'      
        ];
    }
}
