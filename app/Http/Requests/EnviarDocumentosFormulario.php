<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnviarDocumentosFormulario extends FormRequest
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
            'nome' => 'required|max:255',
            'cpf' => 'required|max:20',
            'nome_devedor' => 'required|max:255',
            'num_processo' => 'required|integer',
            'tipo_arquivo' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome do credor é obrigatório',
            'cpf.required'  => 'O CPF do credor é obrigatório',
            'nome_devedor.required'  => 'O nome do devedor é obrigatório',
            'num_processo.required'  => 'Informe o numero do Processo',
            'tipo_arquivo.required'  => 'Informe o tipo do arquivo',
        ];
    }
}
