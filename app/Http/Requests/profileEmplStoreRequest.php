<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profileEmplStoreRequest extends FormRequest
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
        $rules = [
          'users_id'          => 'required',
          'nombres'           => 'required',
          'primer_apellido'   => 'required',
          'segundo_apellido'  => 'required',
          'cedula'            => 'required|integer|unique:profile_empl,cedula',
          'fecha_nacimiento'  => 'required|date',
          'genero'            => 'required',
          'fecha_ingreso'     => 'required|date',
          'numero_empleado'   => 'required|integer|unique:profile_empl,numero_empleado',
          'cargo'             => 'required',
          'jefe'              => 'required',
          'zona'              => 'required',
          'municipio'         => 'required',
          'departamento'      => 'required',
          'ventas2019'        => 'required',
          'imagen'            => 'required',
          'cell_phone'        => 'required',
        ];
        return $rules;
    }
}
