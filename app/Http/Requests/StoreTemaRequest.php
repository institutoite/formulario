<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTemaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'tema' => 'required|string|unique:temas|max:100',
            'slogan' => 'required|string|max:250',
            'detalle' => 'required|string|max:1500',
            'indice' => 'nullable|integer|unsigned',
            'materia_id' => 'required|integer|exists:materias,id'
        ];
    }
}
