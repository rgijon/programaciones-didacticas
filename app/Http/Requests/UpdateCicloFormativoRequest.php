<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCicloFormativoRequest extends FormRequest
{
    /**
     * con true permitimos usar la validación
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación: si es requerido o no, max, etc.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'nombre' => 'required|max:150',
        'familia_profesional' => 'required|max:100',
        'grado' => 'required|max:50',
        'modalidad' => 'required|max:80',
        'decreto_referencia' => 'required|max:250',
        ];
    }

    // Método para personalizar el mensaje e error en el formulario

    public function messages():array
    {
        return [
        'nombre.required' => 'El Nombre es oblitario.',
        'familia_profesional.required' => 'La Familia Profesional es obligatoria.',
        'grado.required' => 'El Grado es oblitario.',
        'modalidad.required' => 'La Modalidad es obligatoria.',
        'decreto_referencia.required' => 'El Decreto es oblitario.',
        ];
    }
}
