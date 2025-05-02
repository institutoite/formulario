<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTemaRequest extends FormRequest
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
        
        $temaId = $this->route('tema'); // Asume que el parámetro de ruta se llama 'tema'
        // dd($temaId);
        return [
            'tema' => 'required|string|max:100|unique:temas,tema,' . $temaId->id, // Ignora el registro actual
            'slogan' => 'sometimes|string|max:250', // "sometimes" = solo valida si está presente
            'detalle' => 'sometimes|string|max:1500',
            'indice' => 'nullable|integer|min:0', // "unsigned" se reemplaza por "min:0"
            'materia_id' => 'sometimes|integer|exists:materias,id'
        ];
    }
}
