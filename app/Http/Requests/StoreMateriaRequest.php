<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMateriaRequest extends FormRequest
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
            'materia' => 'required|unique:materias|max:25',
            'slogan' => 'required|max:150',
            'detalle' => 'required|max:1500',
            'url' => 'nullable|image|max:3000',
        ];
    }
}
