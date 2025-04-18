<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormulaRequest extends FormRequest
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
            'nombre'=> 'required|string|max:250',
            'formula'=> 'required|string|max:2500',
            'detalle'=> 'nullable|string|max:5000',
            'tema_id'=> 'required|exists:temas,id',
        ];
    }
}