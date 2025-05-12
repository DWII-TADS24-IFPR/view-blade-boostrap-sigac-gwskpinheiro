<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
            return [
            'nome' => 'required|string|max:255',
            'matricula' => 'required|string|max:255', 
            'email' => 'required|email|max:255',
            'data_nascimento' => 'required|date',
            'cpf' => 'required|string|max:14',
        ];
    }
}