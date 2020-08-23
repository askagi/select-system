<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            //Required for Student
            'name' => 'required',
            'cpf' => 'required', 
            'rg' => 'required', 
            'date_birth' => 'required', 
            'phone' => 'required', 
            'email' => 'required',
            'photo' => 'image',
            
            
            //Required for Address
            'cep' => 'required',
            'street' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Este campo não pode ficar vazio!',
            'image' => 'Imagem Inválida!',
    ];
    }
}
