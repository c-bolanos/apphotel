<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitacionFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
       
        return [
          
            'nombre_habitacion' => 'required',
            'piso_habitacion' => 'required',            

        ];
    }


    public function messages()
 {
    
    return [
        'nombre_habitacion.required' => 'El nombre de habitacion no puede estar vacio',
        'piso_habitacion.required' => 'El piso habitacion no puede estar vacio',
         //'email.email' => 'El correo debe tener un formato correcto',
    ];
}    







}
