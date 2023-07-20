<?php

namespace App\Http\Requests;

use App\Rules\FullName;
use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
            'nome' => ['required', new FullName],
            'nascimento' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'telefone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nascimento.required' => 'O campo nascimento é obrigatório',
            'cpf.required' => 'O campo cpf é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'telefone.required' => 'O campo telefone é obrigatório',
        ];
    }
}
