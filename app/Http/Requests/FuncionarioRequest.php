<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
            'nome' => 'required|min:3|max:20',
            'matricula' => 'required|max:6',
            'data_nascimento' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'salario' => 'required',
            'departamento_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'matricula.required' => 'Matrícula é obrigatório',
            'matricula.max' => 'Matrícula pode ter no máximo 6 caracteres',
            'data_nascimento.required' => 'Data nascimento é obrigatório',
            'telefone.required' => 'Telefone é obrigatório',
            'email.required' => 'E-mail é obrigatório',
            'email.email' => 'E-mail inválido',
            'salario.required' => 'Salário é obrigatório',
            'departamento_id.required' => 'Departamento é obrigatório'
        ];
    }
}
