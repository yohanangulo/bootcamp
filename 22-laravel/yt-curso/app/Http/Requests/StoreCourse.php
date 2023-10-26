<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourse extends FormRequest
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
            'name' => ['required', 'min: 3'],
            'slug' => ['required', 'unique:courses'],
            'description' => 'required',
            'category' => 'required',            //
        ];
    }

    public function messages(): array
    {
        return [
            'description.required' => 'La descripcion es obligatoria',
        ];
    }
}
