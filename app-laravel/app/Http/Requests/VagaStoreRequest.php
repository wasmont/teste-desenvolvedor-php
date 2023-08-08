<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VagaStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => 'string|required',
            'empresa' => 'string|required',
            'detalhes' => 'string|required',
            'requisitos' => 'string|required',
            'escolaridade' => 'string|required',
            'cep' => 'string|required',
            'endereco' => 'string|required',
            'numero' => 'string|required',
            'complemento' => 'string|required',
            'cidade' => 'string|required',
            'estado' => 'string|required',
            'pais' => 'string|required',
            'salario' => 'required','numeric', 'min:1', 'max:99999.99', 'regex:/^\d+(\.\d{1,2})?$/',
            'beneficios' => 'string|required',
            'tipo_contratacao' => 'string|required',
            'horario_trabalho' => 'string|required',
            'prioridade' => 'string|required',
            'observacoes' => 'string|required',
            'pausar' => 'bool|required',
            'ativo' => 'bool|required'
        ];
    }
}
